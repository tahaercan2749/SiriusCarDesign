<?php

use App\Http\Controllers\Cms\OurValuesController;
use Illuminate\Support\Facades\Route;

Route::middleware("permission:degerlerimiz")->group(function () {
    Route::resource('values', OurValuesController::class)->only(['index', 'create', 'store','edit','update','destroy']);
});


