<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Image;
use App\Livewire\LoginExterno;
use Elibyy\TCPDF\Facades\TCPDF;
use Spatie\Browsershot\Browsershot;

Route::view('/', 'welcome');

Route::view('/pp', 'prueba');

Route::view('/informe', 'pdf.informe');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('formulario', 'formulario')
    ->middleware(['auth', 'verified'])
    ->name('form');

Route::view('incidente', 'incidente')
    ->middleware(['auth', 'verified'])
    ->name('incidente');

Route::view('reporte', 'reporte')
    ->middleware(['auth', 'verified'])
    ->name('reporte');

Route::get('/ex', function () {
    // $html = view()->make('prueba')->render();
    // $pdf = new TCPDF;
    // $pdf::AddPage();
    // $pdf::writeHTML($html, true, false, true, false, '');
    // $pdf::Output(public_path(uniqid().'_p.pdf'), 'f');

    Browsershot::url('http://istrx.test/informe')
        ->landscape()
        ->save('/storage/invoice.pdf');

});

Route::post('/upload/image', [Image::class, 'uploadImages'])->middleware(['auth', 'verified'])->name("pay-plan");
Route::get('/l/e', LoginExterno::class)->name('login-externo');
Route::view('g', 'geolocalizacion')->name('geolocalizacion');

require __DIR__.'/auth.php';
