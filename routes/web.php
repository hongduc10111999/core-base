<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Route::prefix('')->group(function () {
    Auth::routes(['verify' => true]);
    route::get('/', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');
});

Route::prefix('email')->group(function () {
    Route::get('/verify', function () {
        return view('auth.verify');
    })->middleware('auth')->name('verification.notice');

    Route::post('/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

    Route::get('/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/');
    })->middleware(['auth', 'signed'])->name('verification.verify');
});