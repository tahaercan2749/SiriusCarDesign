<?php

use App\Http\Controllers\Cms\PageController;
use App\Http\Controllers\UI\UserIndexController;
use Illuminate\Support\Facades\Route;

Route::middleware("permission:sayfa")->group(function () {
    Route::get('/pages/{id}/create-category-page', [PageController::class, 'createCategoryPage'])->name('pages.create.category-page');
    Route::get('/pages/deleted', [PageController::class, 'deleted'])->name('pages.deleted');
    Route::post('pages/{id}/publish', [PageController::class, "publishPage"])->name("pages.publish");
    Route::post('pages/{id}/restore', [PageController::class, "restore"])->name("pages.restore");
    Route::delete('pages/{id}/force-delete', [PageController::class, "forceDelete"])->name("pages.forceDelete");
    Route::resource('pages', PageController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
});



