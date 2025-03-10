<?php

namespace App\Providers;

use App\Models\User;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;
use App\Services\Factory\PaymentFactory;
use App\Contracts\Observer\UserObserverInterface;
use App\Contracts\Factory\PaymentFactoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PaymentFactoryInterface::class, PaymentFactory::class);
        $this->app->bind(UserObserverInterface::class, UserObserver::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        User::observe(UserObserver::class);
    }
}
