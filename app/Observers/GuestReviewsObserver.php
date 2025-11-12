<?php

namespace App\Observers;

use App\Models\GuestReviews;
use Illuminate\Support\Facades\Cache;

class GuestReviewsObserver
{
    /**
     * Handle the GuestReviews "created" event.
     */
    public function created(GuestReviews $guestReviews): void
    {
        Cache::forget("reviews");
        Cache::remember("reviews", now()->addDay(), function () {
            return GuestReviews::all();
        });
    }

    /**
     * Handle the GuestReviews "updated" event.
     */
    public function updated(GuestReviews $guestReviews): void
    {
        Cache::forget("reviews");
        Cache::remember("reviews", now()->addDay(), function () {
            return GuestReviews::all();
        });
    }

    /**
     * Handle the GuestReviews "deleted" event.
     */
    public function deleted(GuestReviews $guestReviews): void
    {
        Cache::forget("reviews");
        Cache::remember("reviews", now()->addDay(), function () {
            return GuestReviews::all();
        });
    }

    /**
     * Handle the GuestReviews "restored" event.
     */
    public function restored(GuestReviews $guestReviews): void
    {
        Cache::forget("reviews");
        Cache::remember("reviews", now()->addDay(), function () {
            return GuestReviews::all();
        });
    }

    /**
     * Handle the GuestReviews "force deleted" event.
     */
    public function forceDeleted(GuestReviews $guestReviews): void
    {
        Cache::forget("reviews");
        Cache::remember("reviews", now()->addDay(), function () {
            return GuestReviews::all();
        });
    }
}
