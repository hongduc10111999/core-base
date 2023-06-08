<?php

use Corebase\Filemanager\src\Controllers\FilemanagerController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('admin/filemanager', [FilemanagerController::class, 'getIndex'])->name('filemanager.base_route');
    Route::post('admin/filemanager', [FilemanagerController::class, 'postAction'])->name('filemanager.action_route');
});
