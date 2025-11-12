<?php

namespace App\Observers;

use App\Models\Category;
use App\Services\LogService;
use Illuminate\Support\Facades\Cache;

class CategoryObserver
{
    /**
     * Handle the Category "created" event.
     */
    public function created(Category $category): void
    {
        Cache::forget('categories');
        Cache::remember('categories', now()->addDay(), function () {
            return Category::all();
        });
        Cache::forget('navbarMenus');
        Cache::remember('navbarMenus', now()->addDay(), function () {
            return Category::whereNull('parent_category')->where("show_menu",1)->orderBy("hit","asc")->get();
        });
        Cache::forget('fastMenus');
        Cache::remember('fastMenus', now()->addDay(), function () {
            return Category::where("show_footer",1)->orderBy("id","asc")->get();
        });

    }

    /**
     * Handle the Category "updated" event.
     */
    public function updated(Category $category): void
    {
        Cache::forget('categories');
        Cache::remember('categories', now()->addDay(), function () {
            return Category::all();
        });
        Cache::forget('navbarMenus');
        Cache::remember('navbarMenus', now()->addDay(), function () {
            return Category::whereNull('parent_category')->where("show_menu",1)->orderBy("hit","asc")->get();
        });
        Cache::forget('fastMenus');
        Cache::remember('fastMenus', now()->addDay(), function () {
            return Category::where("show_footer",1)->orderBy("id","asc")->get();
        });
    }

    /**
     * Handle the Category "deleted" event.
     */
    public function deleted(Category $category): void
    {
        Cache::forget('categories');
        Cache::remember('categories', now()->addDay(), function () {
            return Category::all();
        });
        Cache::forget('navbarMenus');
        Cache::remember('navbarMenus', now()->addDay(), function () {
            return Category::whereNull('parent_category')->where("show_menu",1)->orderBy("hit","asc")->get();
        });
        Cache::forget('fastMenus');
        Cache::remember('fastMenus', now()->addDay(), function () {
            return Category::where("show_footer",1)->orderBy("id","asc")->get();
        });
    }

    /**
     * Handle the Category "restored" event.
     */
    public function restored(Category $category): void
    {
        Cache::forget('categories');
        Cache::remember('categories', now()->addDay(), function () {
            return Category::all();
        });
        Cache::forget('navbarMenus');
        Cache::remember('navbarMenus', now()->addDay(), function () {
            return Category::whereNull('parent_category')->where("show_menu",1)->orderBy("hit","asc")->get();
        });
        Cache::forget('fastMenus');
        Cache::remember('fastMenus', now()->addDay(), function () {
            return Category::where("show_footer",1)->orderBy("id","asc")->get();
        });
    }

    /**
     * Handle the Category "force deleted" event.
     */
    public function forceDeleted(Category $category): void
    {
        Cache::forget('categories');
        Cache::remember('categories', now()->addDay(), function () {
            return Category::all();
        });
        Cache::forget('navbarMenus');
        Cache::remember('navbarMenus', now()->addDay(), function () {
            return Category::whereNull('parent_category')->where("show_menu",1)->orderBy("hit","asc")->get();
        });
        Cache::forget('fastMenus');
        Cache::remember('fastMenus', now()->addDay(), function () {
            return Category::where("show_footer",1)->orderBy("id","asc")->get();
        });
    }
}
