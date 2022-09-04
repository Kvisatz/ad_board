<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class HeadercarouselServiceProvider extends ServiceProvider
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

            // $categories = Category::get();
            $view->with('widget_header_carousel', view('providers.headercarousel'));
        });
    }
}
