<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('pages.index');
// });
Route::controller(IndexController::class)->group(function (){
    Route::middleware(['auth'])->group(function () {
        
        Route::get('/cabinet', 'cabinetAction')->name('cabinet');
        Route::post('/cabinet/personal-data-request', 'datarequestAction');
        Route::get('/cabinet/favorite', 'favoriteAction')->name('favorite');
        Route::get('/cabinet/my-adverts', 'myadvertsAction')->name('myadverts');
        Route::get('/cabinet/new-advert', 'newadvertAction')->name('new-advert');
        Route::get('/cabinet/updateadvert/{id}', 'updateadvertAction', function($id){
            return $id;
            });
        Route::post('/cabinet/advert-request', 'newadvertrequestAction');
        Route::post('/cabinet/delete-advert', 'deleteadvertAction');
 
    });
    Route::get('/', 'indexAction');
    Route::get('/login', 'loginAction')->name('login');
    Route::post('/login-request', 'loginrequestAction');
    Route::get('/logout', 'logoutAction')->name('logout');
    Route::get('/register', 'registerAction')->name('register');
    Route::post('/register-request', 'registerrequestAction');
    Route::get('/register-execution', 'registerexecutionAction')->name('register-execution');
    Route::get('/add-new-advert', 'addnewadvertAction')->name('add-new-advert');
    Route::post('/reginster-advert-request', 'registerandaddadvertrequestAction')->name('reginster-advert-request');

    Route::get('/category/{id}', 'categoryAction', function($id){
        return $id;
        });
    Route::get('/advert/{id}', 'advertAction', function($id){
        return $id;
        });
    Route::get('/search', 'searchAction')->name('search');
    Route::post('/filter-search', 'filtersearchAction')->name('filter-search');
    Route::get('/allmessvip', 'allmessvipAction');
    Route::get('/freshadvert', 'freshadvertAction');
    Route::get('/footer', 'footerAction');
    

    
    
    
});

Route::controller(AdminController::class)->group(function (){
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/dashboard', 'indexAction')->name('dashboard');
        Route::get('/profile', 'profileAction')->name('profile');
        Route::get('/admin-logout', 'logoutAction')->name('admin-logout');
        Route::get('/coming-soon', 'comingsoonAction')->name('coming-soon');
        Route::get('/categories', 'categoriesAction')->name('categories');
        Route::get('/users', 'usersAction')->name('users');
        Route::get('/adverts', 'advertsAction')->name('adverts');
        Route::get('/alerts', 'alertsAction')->name('alerts');
        Route::get('/badges', 'badgesAction')->name('badges');
        Route::get('/buttons', 'buttonsAction')->name('buttons');
        Route::get('/cards', 'cardsAction')->name('cards');
        Route::get('/carousels', 'carouselsAction')->name('carousels');
        Route::get('/lists', 'listsAction')->name('lists');
        Route::get('/modals', 'modalsAction')->name('modals');
        Route::get('/navigations', 'navigationsAction')->name('navigations');
        Route::post('/delete-advert', 'deleteadvertAction')->name('delete-advert');
        Route::get('/changeadvert/{id}', 'changeadvertAction', function($id){
            return $id;
            });
        Route::post('/change-advert-request', 'changeadvertrequestAction')->name('change-advert-request');
        
            

        
        
        
        
        
    });
});
