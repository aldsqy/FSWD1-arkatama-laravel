<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('user', function () {
            if (!auth()->check()) {
                return false;
            }
            return auth()->user()->role == "user";
        });
        Blade::if('staff', function () {
            if (!auth()->check()) {
                return false;
            }
            return auth()->user()->role == "staff";
        });
        Blade::if('admin', function () {
            if (!auth()->check()) {
                return false;
            }
            return auth()->user()->role == "admin";
        });
    }
}
