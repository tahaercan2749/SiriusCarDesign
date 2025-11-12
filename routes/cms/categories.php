<?php

use App\Http\Controllers\Cms\CategoryController;
use Illuminate\Support\Facades\Route;

Route::middleware("permission:kategori")->group(function () {
    Route::get('/category/deleted', [CategoryController::class, 'deleted'])->name('category.deleted');
    Route::get('/category/special-categories', [CategoryController::class, 'specialCategoriesList'])->name('category.special-categories');
    Route::post('/category/special-categories/{id}/set', [CategoryController::class, 'specialCategoriesSet'])->name('category.special-categories-set');
    Route::post('category/{id}/activate', [CategoryController::class, 'activate'])->name('category.activate');
    Route::delete('category/{id}/force-delete', [CategoryController::class, 'forceDelete'])->name('category.forceDelete');
    Route::post('category/{id}/restore', [CategoryController::class, 'restore'])->name('category.restore');
    Route::resource('category', CategoryController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy',]);
});

