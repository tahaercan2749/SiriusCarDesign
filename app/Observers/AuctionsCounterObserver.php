<?php

namespace App\Observers;

use App\Models\AuctionCounter;
use Illuminate\Support\Facades\Cache;

class AuctionsCounterObserver
{
    /**
     * Handle the AuctionCounter "created" event.
     */
    public function created(AuctionCounter $auctionCounter): void
    {
        Cache::forget('auctions');
        Cache::remember('auctions', now()->addDay(), function () {
            return AuctionCounter::all();
        });
    }

    /**
     * Handle the AuctionCounter "updated" event.
     */
    public function updated(AuctionCounter $auctionCounter): void
    {
        Cache::forget('auctions');
        Cache::remember('auctions', now()->addDay(), function () {
            return AuctionCounter::all();
        });
    }

    /**
     * Handle the AuctionCounter "deleted" event.
     */
    public function deleted(AuctionCounter $auctionCounter): void
    {
        Cache::forget('auctions');
        Cache::remember('auctions', now()->addDay(), function () {
            return AuctionCounter::all();
        });
    }

    /**
     * Handle the AuctionCounter "restored" event.
     */
    public function restored(AuctionCounter $auctionCounter): void
    {
        Cache::forget('auctions');
        Cache::remember('auctions', now()->addDay(), function () {
            return AuctionCounter::all();
        });
    }

    /**
     * Handle the AuctionCounter "force deleted" event.
     */
    public function forceDeleted(AuctionCounter $auctionCounter): void
    {
        Cache::forget('auctions');
        Cache::remember('auctions', now()->addDay(), function () {
            return AuctionCounter::all();
        });
    }
}
