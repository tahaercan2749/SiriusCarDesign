<?php

namespace App\Observers;

use App\Models\Contacts;
use Illuminate\Support\Facades\Cache;

class ContactsObserver
{
    /**
     * Handle the Contacts "created" event.
     */
    public function created(Contacts $contacts): void
    {
        Cache::forget('contacts');
        Cache::remember('contacts', now()->addDay(), function () {
            return Contacts::all();
        });
    }

    /**
     * Handle the Contacts "updated" event.
     */
    public function updated(Contacts $contacts): void
    {
        Cache::forget('contacts');
        Cache::remember('contacts', now()->addDay(), function () {
            return Contacts::all();
        });
    }

    /**
     * Handle the Contacts "deleted" event.
     */
    public function deleted(Contacts $contacts): void
    {
        Cache::forget('contacts');
        Cache::remember('contacts', now()->addDay(), function () {
            return Contacts::all();
        });
    }

    /**
     * Handle the Contacts "restored" event.
     */
    public function restored(Contacts $contacts): void
    {
        Cache::forget('contacts');
        Cache::remember('contacts', now()->addDay(), function () {
            return Contacts::all();
        });
    }

    /**
     * Handle the Contacts "force deleted" event.
     */
    public function forceDeleted(Contacts $contacts): void
    {
        Cache::forget('contacts');
        Cache::remember('contacts', now()->addDay(), function () {
            return Contacts::all();
        });
    }
}
