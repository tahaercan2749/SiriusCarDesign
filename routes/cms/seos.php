<?php

use App\Http\Controllers\Cms\SeoController;
use Illuminate\Support\Facades\Route;

Route::middleware(['permission:seo'])->group(function () {
    Route::resource('seos', SeoController::class)->only("index", "create", "store", "edit", "update", "destroy");
});
