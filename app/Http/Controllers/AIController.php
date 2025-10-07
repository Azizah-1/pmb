<?php

namespace App\Http\Controllers;

use App\Services\AIService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AIController extends Controller
{
    protected $aiService;

    public function __construct(AIService $aiService)
    {
        $this->aiService = $aiService;
    }

    /**
     * Display AI Assistant page
     */
    public function assistant()
    {
        // Test connection saat page load
        $testResult = $this->aiService->testConnection();
        return view('ai-assistant', ['testResult' => $testResult]);
    }

    /**
     * Test page for AI features
     */
    public function test()
    {
        $testResult = $this->aiService->testConnection();
        return view('ai-test', ['testResult' => $testResult]);
    }

    /**
     * Test API connection
     */
    public function testApi(): JsonResponse
    {
        try {
            $result = $this->aiService->testConnection();
            return response()->json($result);
        } catch (\Exception $e) {
            Log::error('Test API Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => 'Service unavailable: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Handle chat messages
     */
    public function chat(Request $request): JsonResponse
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'message' => 'required|string|max:2000',
            'model' => 'sometimes|string|in:gpt-3.5-turbo,gpt-4,gpt-4o'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => 'Invalid input: ' . $validator->errors()->first()
            ], 422);
        }

        try {
            $result = $this->aiService->chat(
                $request->input('message'),
                $request->input('model', 'gpt-3.5-turbo')
            );
            
            return response()->json($result);
        } catch (\Exception $e) {
            Log::error('Chat Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => 'Chat service error: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Analyze image with AI
     */
    public function analyzeImage(Request $request): JsonResponse
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:10240', // 10MB max
            'prompt' => 'required|string|max:1000'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => 'Invalid input: ' . $validator->errors()->first()
            ], 422);
        }

        try {
            $imagePath = $request->file('image')->getPathname();
            $result = $this->aiService->analyzeImage($imagePath, $request->input('prompt'));
            
            return response()->json($result);
        } catch (\Exception $e) {
            Log::error('Image Analysis Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => 'Image analysis error: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Generate content for specific purposes (extendable)
     */
    public function generateContent(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required|string|in:description,email,announcement',
            'topic' => 'required|string|max:500',
            'tone' => 'sometimes|string|in:formal,casual,professional,friendly'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => 'Invalid input: ' . $validator->errors()->first()
            ], 422);
        }

        try {
            $prompt = $this->buildContentPrompt(
                $request->input('type'),
                $request->input('topic'),
                $request->input('tone', 'professional')
            );

            $result = $this->aiService->chat($prompt, 'gpt-4o');
            
            return response()->json($result);
        } catch (\Exception $e) {
            Log::error('Content Generation Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => 'Content generation error: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Build prompt for content generation
     */
    private function buildContentPrompt(string $type, string $topic, string $tone): string
    {
        $prompts = [
            'description' => "Tulis deskripsi tentang {$topic} dengan gaya {$tone}. Deskripsi harus informatif dan menarik.",
            'email' => "Tulis email tentang {$topic} dengan gaya {$tone}. Email harus profesional dan jelas.",
            'announcement' => "Buat pengumuman tentang {$topic} dengan gaya {$tone}. Pengumuman harus jelas dan mudah dipahami."
        ];

        return $prompts[$type] ?? "Tulis tentang {$topic} dengan gaya {$tone}.";
    }

    /**
     * Get available AI models
     */
    public function getModels(): JsonResponse
    {
        $models = [
            [
                'id' => 'gpt-3.5-turbo',
                'name' => 'GPT-3.5 Turbo',
                'description' => 'Cepat dan efisien untuk tugas sehari-hari',
                'max_tokens' => 4096,
                'supports_vision' => false
            ],
            [
                'id' => 'gpt-4o',
                'name' => 'GPT-4o',
                'description' => 'Model terbaru dengan kemampuan vision',
                'max_tokens' => 4096,
                'supports_vision' => true
            ]
        ];

        return response()->json([
            'success' => true,
            'models' => $models
        ]);
    }

    /**
     * Get API usage statistics (mock data - extend with real tracking)
     */
    public function getUsage(): JsonResponse
    {
        // Ini contoh data, bisa diintegrasikan dengan database nanti
        $usage = [
            'total_requests' => 150,
            'successful_requests' => 142,
            'failed_requests' => 8,
            'average_response_time' => '2.3s',
            'most_used_model' => 'gpt-3.5-turbo'
        ];

        return response()->json([
            'success' => true,
            'usage' => $usage
        ]);
    }
}