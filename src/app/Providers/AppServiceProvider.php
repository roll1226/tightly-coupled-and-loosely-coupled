<?php

namespace App\Providers;

use App\Services\LowCoupling\NotificationService;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\NotifierRepositoryInterface;
use App\Repositories\EmailNotifierRepository;
use App\Repositories\SMSNotifierRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(
            NotifierRepositoryInterface::class,
            EmailNotifierRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
