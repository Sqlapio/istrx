<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Image;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('formulario', 'formulario')
    ->middleware(['auth', 'verified'])
    ->name('form');

Route::post('/upload/image', [Image::class, 'uploadImages'])->middleware(['auth', 'verified'])->name("pay-plan");

require __DIR__.'/auth.php';
