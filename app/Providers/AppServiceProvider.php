<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Banner;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer(['*'], function ($view){
            $view->with('contact_home', Contact::latest()->first());
            $view->with('banner_image', Banner::latest()->first());
        });
    }
}
