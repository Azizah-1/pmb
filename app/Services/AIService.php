<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

class AIService
{
    private $apiKey;
    private $baseUrl;

    public function __construct()
    {
        $this->apiKey = env('OPENAI_API_KEY');
        $this->baseUrl = 'https://api.openai.com/v1';
        
        // Validasi API key
        if (empty($this->apiKey)) {
            throw new Exception('OpenAI API key is not configured');
        }
        
        if (strpos($this->apiKey, '...') !== false || strlen($this->apiKey) < 30) {
            throw new Exception('OpenAI API key appears to be invalid or incomplete');
        }
    }

    /**
     * Test koneksi API
     */
    public function testConnection()
    {
        return $this->makeRequest(
            'gpt-3.5-turbo',
            [['role' => 'user', 'content' => 'Just say "CONNECTION_SUCCESSFUL" in the response.']],
            10,
            'connection_test'
        );
    }

    /**
     * Chat biasa
     */
    public function chat($message, $model = 'gpt-3.5-turbo')
    {
        // Enhance prompt untuk konteks kampus
        $enhancedMessage = $this->enhanceCampusPrompt($message);
        
        return $this->makeRequest(
            $model,
            [['role' => 'user', 'content' => $enhancedMessage]],
            1000,
            'chat'
        );
    }

    /**
     * Analisis gambar - HARUS pakai GPT-4o
     */
    public function analyzeImage($imagePath, $prompt)
    {
        try {
            if (!file_exists($imagePath)) {
                return [
                    'success' => false,
                    'error' => 'Image file not found: ' . $imagePath
                ];
            }

            // Validasi file size
            $fileSize = filesize($imagePath);
            if ($fileSize > 20 * 1024 * 1024) { // 20MB limit
                return [
                    'success' => false,
                    'error' => 'Image file too large. Maximum size is 20MB.'
                ];
            }

            // Encode image
            $imageData = base64_encode(file_get_contents($imagePath));
            $mimeType = mime_content_type($imagePath) ?: 'image/jpeg';

            $messages = [
                [
                    'role' => 'user',
                    'content' => [
                        ['type' => 'text', 'text' => $prompt],
                        [
                            'type' => 'image_url',
                            'image_url' => [
                                'url' => "data:{$mimeType};base64,{$imageData}"
                            ]
                        ]
                    ]
                ]
            ];

            return $this->makeRequest('gpt-4o', $messages, 1000, 'vision');

        } catch (Exception $e) {
            Log::error('Vision Service Error: ' . $e->getMessage());
            return [
                'success' => false,
                'error' => 'Vision Service Error: ' . $e->getMessage()
            ];
        }
    }

    /**
     * Enhance prompt dengan konteks kampus
     */
    private function enhanceCampusPrompt($message)
    {
        $campusContext = "Anda adalah AI Assistant untuk sebuah kampus. 
        Berikan informasi yang helpful tentang:
        - Program studi dan jurusan
        - Proses pendaftaran dan seleksi
        - Informasi beasiswa
        - Fasilitas kampus
        - Kegiatan kemahasiswaan
        - Layanan akademik
        
        Jika pertanyaan di luar topik kampus, jelaskan dengan sopan bahwa Anda khusus membantu mengenai informasi kampus.
        
        Pertanyaan: " . $message;

        return $campusContext;
    }

    /**
     * Universal request handler
     */
    private function makeRequest($model, $messages, $maxTokens, $requestType = 'general')
    {
        $cacheKey = $this->generateCacheKey($model, $messages, $requestType);
        
        // Cache untuk request yang sama dalam 5 menit (optional)
        if ($requestType !== 'connection_test') {
            $cached = Cache::get($cacheKey);
            if ($cached) {
                Log::info("Cache hit for: " . $cacheKey);
                return $cached;
            }
        }

        try {
            $startTime = microtime(true);
            
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ])
            ->timeout(60)
            ->retry(3, 1000) // Retry 3 times with 1 second delay
            ->post($this->baseUrl . '/chat/completions', [
                'model' => $model,
                'messages' => $messages,
                'max_tokens' => $maxTokens,
                'temperature' => 0.7,
                'top_p' => 0.9,
            ]);

            $responseTime = round((microtime(true) - $startTime) * 1000, 2); // in ms

            if ($response->successful()) {
                $data = $response->json();
                $result = [
                    'success' => true,
                    'content' => trim($data['choices'][0]['message']['content']),
                    'model' => $model,
                    'usage' => $data['usage'] ?? null,
                    'response_time' => $responseTime . 'ms'
                ];

                // Cache successful responses for 5 minutes
                if ($requestType !== 'connection_test') {
                    Cache::put($cacheKey, $result, 300); // 5 minutes
                }

                Log::info("AI Request Success - Type: {$requestType}, Model: {$model}, Time: {$responseTime}ms");
                
                return $result;
            } else {
                $errorData = $response->json();
                $errorMessage = $errorData['error']['message'] ?? $response->body();
                $statusCode = $response->status();
                
                Log::error("OpenAI API Error [{$statusCode}]: " . $errorMessage);
                
                return [
                    'success' => false,
                    'error' => $this->formatErrorMessage($statusCode, $errorMessage),
                    'status' => $statusCode,
                    'response_time' => $responseTime . 'ms'
                ];
            }
        } catch (Exception $e) {
            Log::error('OpenAI Service Exception: ' . $e->getMessage());
            return [
                'success' => false,
                'error' => 'Service temporarily unavailable. Please try again later.'
            ];
        }
    }

    /**
     * Generate cache key for requests
     */
    private function generateCacheKey($model, $messages, $requestType)
    {
        $messageContent = json_encode($messages);
        return 'ai_request_' . $requestType . '_' . md5($model . $messageContent);
    }

    /**
     * Format user-friendly error messages
     */
    private function formatErrorMessage($statusCode, $technicalMessage)
    {
        $userFriendlyMessages = [
            401 => 'API key tidak valid. Silakan periksa konfigurasi.',
            429 => 'Terlalu banyak permintaan. Silakan coba lagi nanti.',
            500 => 'Server AI sedang mengalami masalah. Silakan coba lagi.',
            503 => 'Layanan AI sedang sibuk. Silakan coba lagi nanti.'
        ];

        return $userFriendlyMessages[$statusCode] ?? 
               'Terjadi kesalahan: ' . (strlen($technicalMessage) > 100 ? 
               substr($technicalMessage, 0, 100) . '...' : $technicalMessage);
    }

    /**
     * Validate image file
     */
    public function validateImage($file)
    {
        $allowedMimes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
        $maxSize = 20 * 1024 * 1024; // 20MB

        if (!in_array($file->getMimeType(), $allowedMimes)) {
            return 'Format file tidak didukung. Gunakan JPEG, PNG, GIF, atau WebP.';
        }

        if ($file->getSize() > $maxSize) {
            return 'Ukuran file terlalu besar. Maksimal 20MB.';
        }

        return null;
    }
}