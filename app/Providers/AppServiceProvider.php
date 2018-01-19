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
        $this->app->bind('\FileUpload\FileNameGenerator\FileNameGenerator','\FileUpload\FileNameGenerator\Simple');
        $this->app->bind('\FileUpload\PathResolver\PathResolver',
            function ($app) {
                return $app->makeWith('\FileUpload\PathResolver\Simple',['main_path' => 'storage/public']);
            }
        );
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
