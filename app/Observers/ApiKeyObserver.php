<?php

namespace App\Observers;

use App\Models\ApiKeys;
use App\Models\Blade;
use App\Services\LogService;
use Illuminate\Support\Facades\Cache;

class ApiKeyObserver
{
    /**
     * Handle the ApiKeys "created" event.
     */
    public function created(ApiKeys $apiKeys): void
    {
        Cache::forget('apiKey');
        Cache::remember('apiKey', now()->addDay(), function () {
            return ApiKeys::first();
        });
    }

    /**
     * Handle the ApiKeys "updated" event.
     */
    public function updated(ApiKeys $apiKeys): void
    {
        Cache::forget('apiKey');
        Cache::remember('apiKey', now()->addDay(), function () {
            return ApiKeys::first();
        });
    }

}
