<?php

use App\Http\Controllers\Cms\RoleController;
use App\Http\Controllers\Cms\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware("permission:kullanicilar")->group(function () {
    Route::get("users",[UserController::class,"index"])->name("users.index");
    Route::get("users/{id}/destroy",[UserController::class,"destroy"])->name("users.destroy");
});


