<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramStudiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.mahasiswa.index');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa.index');
})->middleware(['auth', 'verified'])->name('mahasiswaList');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/prodi', [ProgramStudiController::class, 'index'])->name('prodiList');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
