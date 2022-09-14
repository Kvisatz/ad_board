<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
        Route::post('/cabinet/advert-request', 'newadvertrequestAction');
        Route::post('/cabinet/delete-advert', 'deleteadvertAction');
        
       
        
    });
    Route::get('/', 'indexAction');
    Route::get('/login', 'loginAction')->name('login');
    Route::post('/login-request', 'loginrequestAction');
    Route::get('/logout', 'logoutAction')->name('logout');
    Route::get('/category/{id}', 'categoryAction', function($id){
        return $id;
        });
    Route::get('/advert/{id}', 'advertAction', function($id){
        return $id;
        });
    Route::get('/test', 'testAction');
    
});
