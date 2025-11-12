<?php

namespace App\Observers;

use App\Models\HomePageManagement;
use Illuminate\Support\Facades\Cache;

class HomePageManagementObserver
{
    /**
     * Handle the HomePageManagement "created" event.
     */
    public function created(HomePageManagement $homePageManagement): void
    {
        Cache::forget("homeSections");
        Cache::remember("homeSections", now()->addDay(), function (){
            return HomePageManagement::all();
        });
    }

    /**
     * Handle the HomePageManagement "updated" event.
     */
    public function updated(HomePageManagement $homePageManagement): void
    {
        Cache::forget("homeSections");
        Cache::remember("homeSections", now()->addDay(), function (){
            return HomePageManagement::all();
        });
    }

    /**
     * Handle the HomePageManagement "deleted" event.
     */
    public function deleted(HomePageManagement $homePageManagement): void
    {
        Cache::forget("homeSections");
        Cache::remember("homeSections", now()->addDay(), function (){
            return HomePageManagement::all();
        });
    }

    /**
     * Handle the HomePageManagement "restored" event.
     */
    public function restored(HomePageManagement $homePageManagement): void
    {
        Cache::forget("homeSections");
        Cache::remember("homeSections", now()->addDay(), function (){
            return HomePageManagement::all();
        });
    }

    /**
     * Handle the HomePageManagement "force deleted" event.
     */
    public function forceDeleted(HomePageManagement $homePageManagement): void
    {
        Cache::forget("homeSections");
        Cache::remember("homeSections", now()->addDay(), function (){
            return HomePageManagement::all();
        });
    }
}
