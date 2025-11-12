<?php

namespace App\Observers;

use App\Models\Brands;
use Illuminate\Support\Facades\Cache;

class BrandsObserver
{
    /**
     * Handle the Brands "created" event.
     */
    public function created(Brands $brands): void
    {
       Cache::forget("brands");
       Cache::remember("brands", now()->addDay(), function () {
            return Brands::all();
        });
    }

    /**
     * Handle the Brands "deleted" event.
     */
    public function deleted(Brands $brands): void
    {
        Cache::forget("brands");
        Cache::remember("brands", now()->addDay(), function () {
            return Brands::all();
        });
    }


}
