<?php

namespace App\Providers;

use App\Http\Services\MyService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class MyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

        $this->app->bind(MyService::class, function ($app) {
           return new MyService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {


    }
}
