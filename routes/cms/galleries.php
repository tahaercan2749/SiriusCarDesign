<?php

use App\Http\Controllers\Cms\GalleryController;
use Illuminate\Support\Facades\Route;

Route::middleware("permission:galeri")->group(function () {
    Route::resource('gallery', GalleryController::class)->only(['index', 'create', 'store', 'destroy']);
    Route::get('gallery/{page_id}/delete-page-gallery', [GalleryController::class, 'destroyPageGallery'])->name('gallery.destroyPageGallery');
    Route::get('gallery/{page_id}/page-gallery', [GalleryController::class, 'pageGallery'])->name('gallery.pageGallery');
    Route::get('gallery/{pageId}/create', [GalleryController::class, 'create'])->name('gallery.create');
});


