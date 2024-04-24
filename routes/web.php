<?php

use App\Http\Controllers\PdfController;
use App\Http\Controllers\WorkbookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/workbooks', [WorkbookController::class, 'store'])->name('workbooks.store');
Route::post('/pdfs', [PdfController::class, 'store'])->name('pdfs.store');
Route::post('/articles', [PdfController::class, 'store'])->name('articles.store');
