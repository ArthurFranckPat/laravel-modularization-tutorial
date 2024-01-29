<?php

namespace Modules\Product\Providers;

use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    public function boot() : void
    {
        $this->loadMigrationsFrom(__DIR__ .'/../Database/Migrations');
        $this->loadRoutesFrom(__DIR__ . '/../routes.php');
        $this->mergeConfigFrom(__DIR__ . '/../config.php','product');
    }
}
