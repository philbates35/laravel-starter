<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
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
        if ($this->isProduction()) {
            Model::shouldBeStrict();
        }
    }

    private function isProduction(): bool
    {
        $environment = $this->app->environment('production');

        \assert(\is_bool($environment));

        return $environment;
    }
}
