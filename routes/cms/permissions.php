<?php

use App\Http\Controllers\Cms\PermissionController;
use Illuminate\Support\Facades\Route;

Route::middleware("permission:izinler")->group(function () {
    Route::resource('permission', PermissionController::class)->only("index", "create", "store", "edit", "update", "destroy");
});



