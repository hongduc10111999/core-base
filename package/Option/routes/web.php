<?php

use Corebase\Option\Http\Controllers\OptionController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web','auth'])->group(function () {
    Route::post("/option/add", [OptionController::class, 'addOption'])->name('option.addoption');
    Route::resource('option', 'Corebase\Option\Http\Controllers\OptionController');
});
