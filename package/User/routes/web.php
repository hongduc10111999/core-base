<?php

use Corebase\User\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web','auth'])->group(function () {
    Route::prefix('/user')->group(function(){
        Route::get('/showrole/{id}',[UserController::class,'showRole'])->name('user.role');
        Route::post('/syncrole/{id}',[UserController::class,'syncRoles'])->name('user.handlerole');
        Route::get('/showpermission',[UserController::class,'showPermission'])->name('user.permission');
        Route::post('/syncpermission/{id}',[UserController::class,'syncPermissions'])->name('user.handlepermission');
        route::get('/showpermissionsviarole/{id}',[UserController::class,'showPermissionsViaRole'])->name('user.showpermissionsvialrole');
    });
    Route::resource('user', UserController::class);
});
