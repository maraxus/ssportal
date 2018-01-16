<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //to fix mysql bug. reffer to https://laravel-news.com/laravel-5-4-key-too-long-error
        Schema::defaultStringLength(191);

        //share a scripts array for page specific jvascript. 
        //Every action using custom js should override with the relevant scripts array.
        View::share('scripts',array());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
