<?php

namespace L37sg0\Rockstar;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use L37sg0\Rockstar\Http\Requests\UpdateIconRequest;

class Register extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UpdateIconRequest::class, function ($app, $params) {
            return new UpdateIconRequest(
                $params['name'] ?? [],
                $params['rules'] ?? [],
                $params['messages'] ?? [],
                $params['attributes'] ?? [],
                $params['files'] ?? []
            );
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->publishes([
            __DIR__ . '/resources/assets' => public_path('rockstar'),
        ], 'assets');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'rockstar');
        Blade::anonymousComponentPath(__DIR__ . '/resources/views', 'rockstar');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }

}
