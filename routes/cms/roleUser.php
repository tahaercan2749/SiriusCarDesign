<?php

use App\Http\Controllers\Cms\RoleUserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['permission:yetkiler'])->group(function () {
    Route::resource('role-user', RoleUserController::class)->only("index", "create", "store", "edit", "update", "destroy");
});


