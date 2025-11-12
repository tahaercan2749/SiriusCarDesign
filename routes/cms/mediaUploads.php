<?php

use App\Http\Controllers\Cms\MediaUploadsController;
use Illuminate\Support\Facades\Route;

Route::middleware("permission:medya")->group(function () {
    Route::resource('media', MediaUploadsController::class)->only(['index', 'create', 'store','destroy']);
});


