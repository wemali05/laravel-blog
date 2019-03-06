<?php

namespace App\Providers;

use App\Services\Twitter; 

use Illuminate\Support\ServiceProvider;



class SocialServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
       
        $this->app->singleton(Twitter::class, function(){
            return new Twitter(config('services.twitter.key'));
        });
    }
}
