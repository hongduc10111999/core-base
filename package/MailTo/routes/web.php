<?php

use Corebase\MailTo\Http\Controllers\MailToController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('mailto/removed', [MailToController::class, 'listDeleted'])->name('mailto.listdeleted');
    Route::get('mailto/foredelete/{id}', [MailToController::class, 'forceDelete'])->name('mailto.forcedelete');
    Route::get('mailto/restore/{id}', [MailToController::class, 'restore'])->name('mailto.restore');
    Route::get('mailto/{id}', [MailToController::class, 'softDelete'])->name('mailto.softdelete');
    Route::resource('mailto', MailToController::class);
});
