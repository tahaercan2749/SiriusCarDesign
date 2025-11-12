<?php

use App\Http\Controllers\Cms\RolePermissionController;
use Illuminate\Support\Facades\Route;

Route::middleware('permission:yetki-izinleri')->group(function () {
    Route::post('/role-permission/toggle/{role}/{permission}', [RolePermissionController::class, 'toggle'])
        ->name('rolePermissions.toggle');
    Route::resource('role-permission', RolePermissionController::class)->only("index", "edit","destroy");
});



