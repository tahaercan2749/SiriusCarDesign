<?php

namespace App\Observers;

use App\Models\Seo;
use Illuminate\Support\Facades\Cache;

class SeoObserver
{
    /**
     * Handle the Seo "created" event.
     */
    public function created(Seo $seo): void
    {
        Cache::forget('seos');
        Cache::remember('seos', now()->addDay(), function () {
            return Seo::all();
        });
    }

    /**
     * Handle the Seo "updated" event.
     */
    public function updated(Seo $seo): void
    {
        Cache::forget('seos');
        Cache::remember('seos', now()->addDay(), function () {
            return Seo::all();
        });
    }

    /**
     * Handle the Seo "deleted" event.
     */
    public function deleted(Seo $seo): void
    {
        Cache::forget('seos');
        Cache::remember('seos', now()->addDay(), function () {
            return Seo::all();
        });
    }

    /**
     * Handle the Seo "restored" event.
     */
    public function restored(Seo $seo): void
    {
        Cache::forget('seos');
        Cache::remember('seos', now()->addDay(), function () {
            return Seo::all();
        });
    }

    /**
     * Handle the Seo "force deleted" event.
     */
    public function forceDeleted(Seo $seo): void
    {
        Cache::forget('seos');
        Cache::remember('seos', now()->addDay(), function () {
            return Seo::all();
        });
    }
}
