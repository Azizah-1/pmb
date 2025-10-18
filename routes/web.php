<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AIController; // Tambahkan ini
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

// Routes yang sudah ada
Route::get('/', function () {
    return view('beranda');
});

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

Route::get('/jurusan', function () {
    return view('jurusan');
})->name('jurusan');

Route::get('/jurusan/rkk-s1', function () {
    return view('jurusan.rkk-s1');
})->name('jurusan.rkk-s1');

Route::get('/jurusan/teknik-lingkungan-s1', function () {
    return view('jurusan.teknik-lingkungan-s1');
})->name('jurusan.teknik-lingkungan-s1');

Route::get('/jurusan/teknik-perminyakan-s1', function () {
    return view('jurusan.teknik-perminyakan-s1');
})->name('jurusan.teknik-perminyakan-s1');

Route::get('/jurusan/fire-safety-d3', function () {
    return view('jurusan.fire-safety-d3');
})->name('jurusan.fire-safety-d3');

Route::get('/jurusan/tekim-d3', function () {
    return view('jurusan.tekim-d3');
})->name('jurusan.tekim-d3');

Route::get('/jurusan/pe-d3', function () {
    return view('jurusan.pe-d3');
})->name('jurusan.pe-d3');

Route::get('/kebijakan-beasiswa', function () {
    return view('kebijakan-beasiswa');
})->name('kebijakan-beasiswa');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');

// Code-based email verification route
Route::get('/verify-email-code', [\App\Http\Controllers\Auth\EmailVerificationController::class, 'verify'])->name('verify.email.code');
// Form to enter verification code manually
Route::get('/verify-email-code/form', function() { return view('auth.verify-code'); })->name('verify.email.code.form');
// POST /verify-email-code is already handled by EmailVerificationController@verify via GET earlier; allow POST as well
Route::post('/verify-email-code', [\App\Http\Controllers\Auth\EmailVerificationController::class, 'verify']);
// Resend code (throttled)
Route::post('/verify-email-code/resend', [\App\Http\Controllers\Auth\ResendVerificationController::class, 'resend'])->middleware('throttle:2,1')->name('verify.email.code.resend');

// 🔥 TAMBAHKAN AI ROUTES DI SINI
Route::get('/ai-assistant', function () {
    return view('ai-assistant');
})->name('ai-assistant');

Route::get('/ai/test', [AIController::class, 'test'])->name('ai.test');
Route::get('/ai/test-api', [AIController::class, 'testApi']);
Route::post('/ai/chat', [AIController::class, 'chat']);
Route::post('/ai/analyze-image', [AIController::class, 'analyzeImage']);

// Test API Key (sementara, bisa dihapus nanti)
Route::get('/test-api', function () {
    $apiKey = env('OPENAI_API_KEY');
    
    echo "<h1>Testing OpenAI API Key</h1>";
    echo "<p>API Key: " . substr($apiKey, 0, 20) . "..." . "</p>";
    echo "<p>Length: " . strlen($apiKey) . "</p>";
    
    try {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
            'Content-Type' => 'application/json',
        ])->timeout(15)->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => 'Just say "Hello World" and nothing else.']
            ],
            'max_tokens' => 10
        ]);

        if ($response->successful()) {
            $result = $response->json();
            echo "<div style='color: green; padding: 10px; background: #f0fff0; border: 1px solid green;'>";
            echo "✅ <strong>SUCCESS!</strong><br>";
            echo "Response: " . $result['choices'][0]['message']['content'];
            echo "</div>";
        } else {
            $error = $response->json();
            echo "<div style='color: red; padding: 10px; background: #fff0f0; border: 1px solid red;'>";
            echo "❌ <strong>ERROR:</strong><br>";
            echo "Status: " . $response->status() . "<br>";
            echo "Message: " . ($error['error']['message'] ?? $response->body());
            echo "</div>";
        }
    } catch (Exception $e) {
        echo "<div style='color: red; padding: 10px; background: #fff0f0; border: 1px solid red;'>";
        echo "❌ <strong>EXCEPTION:</strong><br>";
        echo $e->getMessage();
        echo "</div>";
    }
});

// Dashboard routes (yang sudah ada)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// AI Routes
Route::get('/ai-assistant', [AIController::class, 'assistant'])->name('ai.assistant');
Route::get('/ai/test', [AIController::class, 'test'])->name('ai.test');
Route::get('/ai/test-api', [AIController::class, 'testApi']);
Route::post('/ai/chat', [AIController::class, 'chat']);
Route::post('/ai/analyze-image', [AIController::class, 'analyzeImage']);
Route::post('/ai/generate-content', [AIController::class, 'generateContent']);
Route::get('/ai/models', [AIController::class, 'getModels']);
Route::get('/ai/usage', [AIController::class, 'getUsage']);

// Test API Key (sementara)
Route::get('/test-api', function() {
    // ... kode test API yang sebelumnya
});

require __DIR__.'/auth.php';
