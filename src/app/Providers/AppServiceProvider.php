<?php

namespace App\Providers;

use App\Services\LowCoupling\NotificationService;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\NotifierInterface;
use App\Services\LowCoupling\EmailNotifier;
use App\Services\LowCoupling\SMSNotifier;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(
            NotifierInterface::class,
            SMSNotifier::class
        );

        $this->app->bind(NotificationService::class, function ($app) {
            return new NotificationService($app->make(NotifierInterface::class));
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
