<?php

use App\Http\Controllers\Cms\HomePageManagementController;
use Illuminate\Support\Facades\Route;

Route::middleware("permission:anasayfa-yonetimi")->group(function () {
    Route::post('home-page-management/{id}/restore', [HomePageManagementController::class, 'restore'])->name('home-page-management.restore');
    Route::delete('home-page-management/{id}/force-delete', [HomePageManagementController::class, 'forceDelete'])->name('home-page-management.forceDelete');
    Route::get('home-page-management/deleted', [HomePageManagementController::class, 'deleted'])->name('home-page-management.deleted');
    Route::resource('home-page-management', HomePageManagementController::class)->only(['index', 'create', 'update', 'edit', 'store', 'destroy']);
});


