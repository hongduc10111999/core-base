<?php

use Corebase\Page\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth'])->group(function () {
   Route::get("/page/restore/{id}", [PageController::class, 'restore'])->name('page.restore');
   Route::get("/page/hardelete/{id}", [PageController::class, 'hardelete'])->name('page.hardelete');
   Route::get("/page?view_deleted=DeletedRecords}", [PageController::class, 'index'])->name('page.viewdel');
   Route::resource('page','Corebase\Page\Http\Controllers\PageController');
});
