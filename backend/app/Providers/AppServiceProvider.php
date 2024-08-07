<?php

namespace App\Providers;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        $this->app->singleton(Client::class, function () {
            return new Client();
        });
        $this->app->singleton(\App\Services\ExchangeRateService::class, function($app){
            return new \App\Services\ExchangeRateService($app->make(Client::class));
        });

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
