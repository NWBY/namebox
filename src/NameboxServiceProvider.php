<?php

namespace NWBY\Namebox;

use Illuminate\Support\ServiceProvider;

class NameboxServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('nambox', function ($app) {
            return new Namebox();
        });
    }

    public function boot()
    {
    }
}
