<?php

namespace App\Observers;

use App\Models\Language;
use App\Services\LogService;
use Illuminate\Support\Facades\Cache;

class LanguageObserver
{
    /**
     * Handle the Language "created" event.
     */
    public function created(Language $language): void
    {
        Cache::forget('languages');
        Cache::remember('languages', now()->addDay(), function () {
            return Language::all();
        });
    }

    /**
     * Handle the Language "deleted" event.
     */
    public function deleted(Language $language): void
    {
        Cache::forget('languages');
        Cache::remember('languages', now()->addDay(), function () {
            return Language::all();
        });

    }


}
