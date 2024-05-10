<?php

use App\Http\Controllers\UserSite\ArticleController;
use App\Http\Controllers\UserSite\CartController;
use App\Http\Controllers\UserSite\CheckoutController;
use App\Http\Controllers\UserSite\DownloadController;
use App\Http\Controllers\UserSite\HomeController;
use App\Http\Controllers\UserSite\LocaleController;
use App\Http\Controllers\UserSite\RegisterController;
use App\Http\Controllers\UserSite\WorksheetDetailController;
use App\Http\Controllers\UserSite\WorksheetsController;
use App\Http\Controllers\UserSite\AccountController;
use App\Http\Controllers\UserSite\LoginController;
use App\Http\Controllers\UserSite\OrderController;
use App\Http\Controllers\UserSite\PurchaseController;
use Illuminate\Support\Facades\Route;

include __DIR__ . '/admin.php';

Route::get('/', [HomeController::class, 'index'])->name('user-site-home');

Route::get('locale/{locale}', [LocaleController::class, 'setLocale'])->name('setLocale');

Route::group(['middleware' => 'customer'], function() {
    Route::get('/', [HomeController::class, 'index'])->name('user-site-home');
    Route::get('/article', [ArticleController::class, 'index'])->name('article');
    Route::get('/my-account', [AccountController::class, 'index'])->name('my-account');

    Route::get('/user/login', [LoginController::class, 'index'])->name('user-site.login');
    Route::post('/user/login', [LoginController::class, 'login'])->name('login-submit');
    Route::get('/user/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/user/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/user/register', [RegisterController::class, 'store'])->name('register-submit');

//Route::get('/my-account', [AccountController::class, 'index'])->name('my-account');
    Route::get('/my-account/edit', [AccountController::class, 'edit'])->name('edit-account');
    Route::post('/my-account/edit/submit', [AccountController::class, 'update'])->name('edit-account-submit');
    Route::get('/my-account/change-password', [AccountController::class, 'formChangePassword'])->name('change-password');
    Route::post('/my-account/change-password/submit', [AccountController::class, 'storeChangePassword'])->name('change-password-submit');
    Route::get('/my-purchases', [PurchaseController::class, 'index'])->name('purchase');
    Route::get('/my-orders', [OrderController::class, 'index'])->name('order');

    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::post('/cart', [CartController::class, 'addCart'])->name('cart.add');
    Route::delete('/cart', [CartController::class, 'removeItem'])->name('cart.remove');
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('/checkout', [CheckoutController::class, 'placeOrder'])->name('checkout.place-order');
    Route::post('comment', [App\Http\Controllers\Admin\CommentController::class, 'store'])->name('comments.store');
    Route::post('review', [App\Http\Controllers\Admin\ReviewController::class, 'store'])->name('reviews.store');

    Route::get('station/privacy-statement', function () {
        return view('user-site.station.statement');
    })->name('statement');
    Route::get('station/refund-policy', function () {
        return view('user-site.station.policy');
    })->name('policy');
    Route::get('station/terms-and-conditions', function () {
        return view('user-site.station.terms');
    })->name('terms');
    Route::get('station/about', function () {
        return view('user-site.station.about');
    })->name('about');

// Always put this route at the end of the file
    Route::get('/pub/download/{slug}/{color?}', [DownloadController::class, 'download'])->name('download');
    Route::get('/worksheets/{grade?}/{topic?}', [WorksheetsController::class, 'index'])->name('worksheets');
    Route::get('/{worksheet}', [WorksheetDetailController::class, 'index'])->name('worksheets.detail');
});
