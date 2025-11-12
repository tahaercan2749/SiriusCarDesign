<?php

use App\Http\Controllers\Cms\BrandsController;
use Illuminate\Support\Facades\Route;

Route::middleware(["permission:markalarimiz"])->group(function () {
    Route::resource('brands', BrandsController::class)->only(['index', 'create', 'store', 'destroy']);
});


