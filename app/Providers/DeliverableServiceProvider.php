<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DeliverableServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Contracts\DeliverableContract',
            'App\Services\DeliverableService'
        );
    }
}
