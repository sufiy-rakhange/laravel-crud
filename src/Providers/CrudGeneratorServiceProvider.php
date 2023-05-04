<?php

namespace Sufiyan\CrudGenerator;

use Sufiyan\CrudGenerator;
use Illuminate\Support\ServiceProvider;

class CrudGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->commands([
            CrudGenerator::class,
        ]);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->commands([
            CrudGenerator::class,
        ]);
    }
}
