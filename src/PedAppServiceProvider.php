<?php

namespace PedApp\Test;
use Illuminate\Support\ServiceProvider;
use PedApp\Test\PedApp;

class PedAppServiceProvider extends  ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->bind('pedapp' , function(){
           return new PedApp();
       });

    }

}