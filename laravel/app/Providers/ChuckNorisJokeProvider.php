<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ChuckNorisAPI;

class ChuckNorisJokeProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Register the ChuckNorisAPI Client
        $this->app->singleton(ChuckNorisAPI::class, function() {
            return new ChuckNorisAPI();
        });
    }

    // /**
    //  * Bootstrap services.
    //  *
    //  * @return void
    //  */
    // public function boot()
    // {
    //     //
    // }
}
