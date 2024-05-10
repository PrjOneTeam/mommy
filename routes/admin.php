<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\PdfController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\WorkbookController;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('post.login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'admin'], function() {
    Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('workbook',WorkbookController::class);
    Route::resource('pdf',PdfController::class);
    Route::resource('article',ArticleController::class);
    Route::resource('comment',CommentController::class);
    Route::resource('review',ReviewController::class);
    Route::resource('customer',CustomerController::class);
    Route::resource('order', OrderController::class);
    Route::get('payment', [PaymentController::class, 'index'])->name('payment');
    Route::post('payment', [PaymentController::class, 'store'])->name('payment.store');
});
