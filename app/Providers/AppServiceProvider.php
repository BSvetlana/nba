<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Team;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.master',function($view){

            $teams = Team::has('news')->get();
            $view->with(compact('teams'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
