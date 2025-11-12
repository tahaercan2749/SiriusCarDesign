<?php

use App\Http\Controllers\Cms\FaqController;
use Illuminate\Support\Facades\Route;

Route::middleware("permission:sss")->group(function () {
    Route::post('faqs/{id}/publish', [FaqController::class, 'publish'])->name('faqs.publish');
    Route::resource('faqs', FaqController::class)->only(['index', 'create', 'store','destroy']);
});


