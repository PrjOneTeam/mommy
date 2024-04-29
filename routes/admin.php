<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PdfController;
use App\Http\Controllers\Admin\WorkbookController;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('post.login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'admin'], function() {
    Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/workbooks', [WorkbookController::class, 'store'])->name('workbooks.store');
    Route::post('/pdfs', [PdfController::class, 'store'])->name('pdfs.store');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('/workbooks/lists', [WorkbookController::class, 'listing'])->name('workbooks.lists');
    Route::get('/workbooks', [WorkbookController::class, 'create'])->name('workbooks.create');
    Route::get('/pdfs/lists', [PdfController::class, 'listing'])->name('pdfs.lists');
    Route::get('/pdfs', [PdfController::class, 'create'])->name('pdfs.create');
    Route::get('/articles/lists', [ArticleController::class, 'listing'])->name('articles.lists');
    Route::get('/articles', [ArticleController::class, 'create'])->name('articles.create');
    Route::resource('customer','CustomerController');
    Route::resource('order','OrderController');
});
