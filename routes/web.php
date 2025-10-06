<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

Route::get('/jurusan', function () {
    return view('jurusan');
})->name('jurusan');

Route::get('/kebijakan-beasiswa', function () {
    return view('kebijakan-beasiswa');
})->name('kebijakan-beasiswa');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
