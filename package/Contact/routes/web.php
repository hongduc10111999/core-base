<?php

use Corebase\Contact\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth'])->group(function () {

        Route::get('contact/send',[ContactController::class,'send'])->name('contact.send');
        Route::resource('contact', ContactController::class);

});
