<?php

namespace App\Providers;

use App\Services\LowCoupling\NotificationService;
use Illuminate\Support\ServiceProvider;
use App\Services\Interfaces\NotifierInterface;
use App\Services\LowCoupling\EmailNotifier;
use App\Services\LowCoupling\SMSNotifier;
use App\Repositories\NotificationRepository;
use App\Repositories\Interfaces\NotificationRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(
            NotifierInterface::class,
            SMSNotifier::class
        );

        $this->app->singleton(
            NotificationRepositoryInterface::class,
            NotificationRepository::class
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
