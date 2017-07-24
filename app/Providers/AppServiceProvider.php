<?php

namespace App\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

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
        $this->registerLocalProvidersAndAliases();
    }

    /**
     * Register  providers and aliases which should be registered only in non
     * production environment.
     */
    protected function registerLocalProvidersAndAliases()
    {
        if ($this->app->environment() !== 'production') {
            collect(config('app.local_providers', []))
                ->each(function ($provider) {
                    $this->app->register($provider);
                });

            collect(config('app.local_aliases', []))
                ->each(function ($class, $alias) {
                    AliasLoader::getInstance()->alias($alias, $class);
                });
        }
    }
}
