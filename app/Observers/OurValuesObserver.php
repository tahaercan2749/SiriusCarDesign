<?php

namespace App\Observers;

use App\Models\OurValues;

class OurValuesObserver
{
    /**
     * Handle the OurValues "created" event.
     */
    public function created(OurValues $ourValues): void
    {
        //
    }

    /**
     * Handle the OurValues "updated" event.
     */
    public function updated(OurValues $ourValues): void
    {
        //
    }

    /**
     * Handle the OurValues "deleted" event.
     */
    public function deleted(OurValues $ourValues): void
    {
        //
    }

    /**
     * Handle the OurValues "restored" event.
     */
    public function restored(OurValues $ourValues): void
    {
        //
    }

    /**
     * Handle the OurValues "force deleted" event.
     */
    public function forceDeleted(OurValues $ourValues): void
    {
        //
    }
}
