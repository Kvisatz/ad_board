<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;


class CabinetmainServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('templates/default', function($view){
            $user = Auth::user();
            // dd($user);
            $view->with('widget_cabinet_main', view('providers.cabinetmain', compact('user')));
        });
    }
}
