<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user-site.home');
});

include __DIR__ . '/admin.php';


#---Test Form---
Route::get('comment', [App\Http\Controllers\Admin\CommentController::class, 'create'])->name('comments.create');
Route::post('comment', [App\Http\Controllers\Admin\CommentController::class, 'store'])->name('comments.store');

Route::get('review', [App\Http\Controllers\Admin\ReviewController::class, 'create'])->name('reviews.create');
Route::post('review', [App\Http\Controllers\Admin\ReviewController::class, 'store'])->name('reviews.store');
