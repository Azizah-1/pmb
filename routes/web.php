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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
