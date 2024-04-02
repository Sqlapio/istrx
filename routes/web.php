<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Image;
use Elibyy\TCPDF\Facades\TCPDF;

Route::view('/', 'welcome');

Route::view('/pp', 'prueba');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('formulario', 'formulario')
    ->middleware(['auth', 'verified'])
    ->name('form');

Route::get('/p', function () {
    $html = view()->make('prueba')->render();
    $pdf = new TCPDF;
    $pdf::AddPage();
    $pdf::writeHTML($html, true, false, true, false, '');
    $pdf::Output(public_path(uniqid().'_p.pdf'), 'f');
});

Route::post('/upload/image', [Image::class, 'uploadImages'])->middleware(['auth', 'verified'])->name("pay-plan");

require __DIR__.'/auth.php';
