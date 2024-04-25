<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PdfController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\WorkbookController;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('post.login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'admin'], function() {
    Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/workbooks/lists', [WorkbookController::class, 'listing'])->name('workbooks.lists');
    Route::get('/workbooks', [WorkbookController::class, 'create'])->name('workbooks.create');

    Route::get('/pdfs/lists', [PdfController::class, 'listing'])->name('pdfs.lists');
    Route::get('/pdfs', [PdfController::class, 'create'])->name('pdfs.create');
    Route::post('/pdfs', [PdfController::class, 'store'])->name('pdfs.store');
    Route::delete('/pdfs/{id}', [PdfController::class, 'destroy'])->name('pdfs.destroy');

    Route::get('/articles/lists', [ArticleController::class, 'listing'])->name('articles.lists');
    Route::get('/articles', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
    Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');

    Route::get('/comments/lists', [CommentController::class, 'listing'])->name('comments.lists');
    Route::get('/reviews/lists', [ReviewController::class, 'listing'])->name('reviews.lists');

    Route::resource('customer','CustomerController');
    Route::resource('order','OrderController');
});
