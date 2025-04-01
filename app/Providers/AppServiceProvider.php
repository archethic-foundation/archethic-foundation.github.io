<?php

namespace App\Providers;

use App\Console\Commands\WarmCache;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        if (! $this->app->environment('local')) {
            URL::forceScheme('https');
        }

        if ($this->app->runningInConsole()) {
            $this->commands([
                WarmCache::class,
            ]);
        }
    }
}
