<?php

namespace App\Providers;

use App\Http\Services\PaymentService;
use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PaymentService ::class,function($app){
            return new PaymentService();

        });


    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
