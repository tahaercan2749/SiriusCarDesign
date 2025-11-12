<?php

namespace App\Observers;

use App\Models\MediaUpload;
use Illuminate\Support\Facades\Cache;

class MediaUploadsObserver
{
    /**
     * Handle the MediaUpload "created" event.
     */
    public function created(MediaUpload $mediaUpload): void
    {
        Cache::forget('medias');
        Cache::remember('medias', now()->addDay(), function () {
            return MediaUpload::all();
        });
    }

    /**
     * Handle the MediaUpload "updated" event.
     */
    public function updated(MediaUpload $mediaUpload): void
    {
        //
    }

    /**
     * Handle the MediaUpload "deleted" event.
     */
    public function deleted(MediaUpload $mediaUpload): void
    {
        Cache::forget('medias');
        Cache::remember('medias', now()->addDay(), function () {
            return MediaUpload::all();
        });
    }

    /**
     * Handle the MediaUpload "restored" event.
     */
    public function restored(MediaUpload $mediaUpload): void
    {
        //
    }

    /**
     * Handle the MediaUpload "force deleted" event.
     */
    public function forceDeleted(MediaUpload $mediaUpload): void
    {
        //
    }
}
