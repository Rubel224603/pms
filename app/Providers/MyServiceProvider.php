<?php

namespace App\Providers;

use App\Http\Services\MyService;
use App\PostRepositoryInterface;
use App\Repository\Repository;
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
        $this->app->bind(PostRepositoryInterface::class,Repository::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {


    }
}
