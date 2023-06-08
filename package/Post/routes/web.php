<?php

use Corebase\Post\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth'])->group(function () {
    Route::get("/post/restore/{id}", [PostController::class, 'restore'])->name('post.restore');
    Route::get("/post/hardelete/{id}", [PostController::class, 'hardelete'])->name('post.hardelete');
    Route::get("/post?view_deleted=DeletedRecords}", [PostController::class, 'index'])->name('post.viewdel');
    Route::post('/export-csv',  [PostController::class, 'exportCsv']);
    Route::post('/import-csv',  [PostController::class, 'importCsv']);

    Route::resource('post', 'Corebase\Post\Http\Controllers\PostController');
});
