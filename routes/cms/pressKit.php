<?php

use App\Http\Controllers\Cms\PressKitController;
use Illuminate\Support\Facades\Route;

Route::middleware("permission:basin-kiti")->group(function () {
    Route::post("press-kit/{id}/publish", [PressKitController::class, 'publish'])->name('press-kit.publish');
    Route::resource('press-kit', PressKitController::class)->only('index', 'create', 'store', 'destroy');
});

