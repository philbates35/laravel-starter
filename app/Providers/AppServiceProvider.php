<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Illuminate\Translation\Translator;
use OutOfBoundsException;
use Override;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    #[Override]
    public function register(): void
    {
        $this->app->resolving('translator', function (Translator $translator): void {
            $translator->handleMissingKeysUsing(function (string $key): string {
                $message = "Missing translation key [{$key}] detected.";

                if (!$this->isProduction()) {
                    throw new OutOfBoundsException($message);
                }

                Log::warning($message);

                return $key;
            });
        });
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
