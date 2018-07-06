<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\CurrencyRepository;
use App\Services\CurrencyRepositoryInterface;
use App\Services\CurrencyGenerator;
use App\Services\GetPopularCurrenciesCommandHandler;
use App\Services\GetMostChangedCurrencyCommandHandler;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->app->bind(CurrencyRepository::class,function ($app) {
            return new CurrencyRepository(CurrencyGenerator::generate());
        });
        $this->app->bind(CurrencyRepositoryInterface::class, CurrencyRepository::class);
        
        $this->app->bind(GetPopularCurrenciesCommandHandler::class,function ($app) {
            return new GetPopularCurrenciesCommandHandler($app->make(CurrencyRepository::class));
        });
        $this->app->bind(GetMostChangedCurrencyCommandHandler::class,function ($app) {
            return new GetMostChangedCurrencyCommandHandler($app->make(CurrencyRepository::class));
        });
    }
}