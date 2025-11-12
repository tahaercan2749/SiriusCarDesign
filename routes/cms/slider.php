<?php

use App\Http\Controllers\Cms\SliderController;
use Illuminate\Support\Facades\Route;

Route::middleware(['permission:slider'])->group(function () {
    Route::post("slider/{id}/publish", [SliderController::class, 'publish'])->name('slider.publish');
    Route::resource('slider', SliderController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
});



