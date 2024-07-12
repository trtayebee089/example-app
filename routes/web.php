<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pdf', [PdfController::class, 'getPdf'])->name('pdf');
Route::get('/pdf-view', [PdfController::class, 'viewPdf'])->name('pdf.view');
