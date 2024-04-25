<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\PdfController;
use App\Http\Controllers\Admin\WorkbookController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('post.login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/workbooks', [WorkbookController::class, 'store'])->name('workbooks.store');
Route::post('/pdfs', [PdfController::class, 'store'])->name('pdfs.store');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');


#-----------Route Test-----------
Route::get('/workbooks/lists', [WorkbookController::class, 'listing'])->name('workbooks.lists');
Route::get('/workbooks', [WorkbookController::class, 'create'])->name('workbooks.create');
Route::get('/pdfs/lists', [PdfController::class, 'listing'])->name('pdfs.lists');
Route::get('/pdfs', [PdfController::class, 'create'])->name('pdfs.create');
Route::get('/articles/lists', [ArticleController::class, 'listing'])->name('articles.lists');
Route::get('/articles', [ArticleController::class, 'create'])->name('articles.create');
