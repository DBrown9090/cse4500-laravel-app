<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      $whitelist = array('127.0.0.1', "::1");
      if ($_SERVER && !empty($_SERVER['REMOTE_ADDR']) && !in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
        URL::forceScheme('https');
      }
        //
    }
}
