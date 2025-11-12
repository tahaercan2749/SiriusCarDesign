<?php

use App\Http\Controllers\Cms\SocialMediaController;
use Illuminate\Support\Facades\Route;


Route::get('/social-media/{contactId}/create', [SocialMediaController::class, 'create'])->name('socialMedia.create');
Route::post('/social-media/{contactId}/store', [SocialMediaController::class, 'store'])->name('socialMedia.store');
Route::get('/social-media/{id}/edit', [SocialMediaController::class, 'edit'])->name('socialMedia.edit');
Route::put('/social-media/{id}/update/', [SocialMediaController::class, 'update'])->name('socialMedia.update');
Route::delete('/social-media/{id}/destroy', [SocialMediaController::class, 'destroy'])->name('socialMedia.destroy');


