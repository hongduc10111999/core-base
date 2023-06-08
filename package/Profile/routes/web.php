<?php

use Corebase\Profile\Http\Controllers\AboutController;
use Corebase\Profile\Http\Controllers\BlogDetailController;
use Corebase\Profile\Http\Controllers\BlogGridController;
use Corebase\Profile\Http\Controllers\MyHomeController;
use Corebase\Profile\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth'])->group(function () {
    Route::prefix('profile')->group(function () {
        Route::post('/blogdetail/reply',[BlogDetailController::class,'replyComment'])->name('comment.reply');
        Route::post('/blogdetail/new-comment',[BlogDetailController::class,'newComment'])->name('comment.new');
        Route::resource('home', MyHomeController::class);
        Route::resource('about', AboutController::class);
        Route::resource('bloggrid', BlogGridController::class);
        Route::resource('blogdetail', BlogDetailController::class);
        
    });
});

Route::middleware(['web', 'auth'])->group(function () {
    Route::resource('admin/profile', ProfileController::class);
});
