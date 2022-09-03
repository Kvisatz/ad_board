<?php 

	namespace App\Providers;

	use Illuminate\Support\Facades\View;
	use Illuminate\Support\ServiceProvider;

	use App\Models\Category;

	class CategoryMenuServiceProvider extends ServiceProvider
    {

		public function boot()
	    {
	        View::composer('templates/default', function($view){

	        	$categories = Category::get();
	            $view->with('widget_menu_category', view('providers.categorymenu', compact('categories')));
	        });
	    }
	}