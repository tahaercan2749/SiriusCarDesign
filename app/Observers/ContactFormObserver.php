<?php

namespace App\Observers;

use App\Models\ContactForm;
use Illuminate\Support\Facades\Cache;

class ContactFormObserver
{
    /**
     * Handle the ContactForm "created" event.
     */
    public function created(ContactForm $contactForm): void
    {
        Cache::forget('contactFormUnreadMessage');
        $contactFormUnreadMessage = Cache::remember('contactFormUnreadMessage', now()->addDay(), function () {
            return ContactForm::where("is_read", 0)->count();
        });
    }

    /**
     * Handle the ContactForm "updated" event.
     */
    public function updated(ContactForm $contactForm): void
    {
        Cache::forget('contactFormUnreadMessage');
        $contactFormUnreadMessage = Cache::remember('contactFormUnreadMessage', now()->addDay(), function () {
            return ContactForm::where("is_read", 0)->count();
        });
    }

    /**
     * Handle the ContactForm "deleted" event.
     */
    public function deleted(ContactForm $contactForm): void
    {
        Cache::forget('contactFormUnreadMessage');
        $contactFormUnreadMessage = Cache::remember('contactFormUnreadMessage', now()->addDay(), function () {
            return ContactForm::where("is_read", 0)->count();
        });
    }

    /**
     * Handle the ContactForm "restored" event.
     */
    public function restored(ContactForm $contactForm): void
    {
        Cache::forget('contactFormUnreadMessage');
        $contactFormUnreadMessage = Cache::remember('contactFormUnreadMessage', now()->addDay(), function () {
            return ContactForm::where("is_read", 0)->count();
        });
    }

    /**
     * Handle the ContactForm "force deleted" event.
     */
    public function forceDeleted(ContactForm $contactForm): void
    {
        Cache::forget('contactFormUnreadMessage');
        $contactFormUnreadMessage = Cache::remember('contactFormUnreadMessage', now()->addDay(), function () {
            return ContactForm::where("is_read", 0)->count();
        });
    }
}
