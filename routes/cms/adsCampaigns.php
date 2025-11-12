<?php

use App\Http\Controllers\Cms\AdsCampaignController;
use Illuminate\Support\Facades\Route;

Route::middleware("permission:reklam-kampanyalari")->group(function () {
    Route::get('ads-campaigns/analysis', [AdsCampaignController::class, 'analysis'])->name('ads-campaigns.analysis');
    Route::resource('ads-campaigns', AdsCampaignController::class)->only("index", "create", "store", "show", "destroy");
});



