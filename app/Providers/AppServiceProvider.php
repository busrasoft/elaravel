<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

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
        Blade::directive('br', function(){
            return "</br>";
        });

        Blade::directive('addName', function($arg){
            return "Sayin ...: ".$arg;
        });

        Blade::directive('custom', function($arg){
            return "<".$arg.">";
        });

        Blade::directive('test', function(){
          return  "<hr style=\"border-color:pink\">";
        });
        Response::macro('HomeMessage', function($arg){
            return  Response::make('505 bilgi '.strtoupper($arg));
          });
    }
}
