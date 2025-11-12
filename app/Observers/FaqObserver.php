<?php

namespace App\Observers;

use App\Models\Faq;
use Illuminate\Support\Facades\Cache;

class FaqObserver
{
    /**
     * Handle the Faq "created" event.
     */
    public function created(Faq $faq): void
    {
        Cache::forget('faqs');
        Cache::remember('faqs', now()->addDay(), function () {
            return Faq::all();
        });
    }

    /**
     * Handle the Faq "updated" event.
     */
    public function updated(Faq $faq): void
    {
        Cache::forget('faqs');
        Cache::remember('faqs', now()->addDay(), function () {
            return Faq::all();
        });
    }

    /**
     * Handle the Faq "deleted" event.
     */
    public function deleted(Faq $faq): void
    {
        Cache::forget('faqs');
        Cache::remember('faqs', now()->addDay(), function () {
            return Faq::all();
        });
    }

    /**
     * Handle the Faq "restored" event.
     */
    public function restored(Faq $faq): void
    {
        Cache::forget('faqs');
        Cache::remember('faqs', now()->addDay(), function () {
            return Faq::all();
        });
    }

    /**
     * Handle the Faq "force deleted" event.
     */
    public function forceDeleted(Faq $faq): void
    {
        Cache::forget('faqs');
        Cache::remember('faqs', now()->addDay(), function () {
            return Faq::all();
        });
    }
}
