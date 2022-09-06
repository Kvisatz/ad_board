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
    Route::get('/', 'indexAction');
    Route::get('/login', 'loginAction')->name('login');
    Route::post('/login-request', 'loginrequestAction');
    Route::get('/cabinet', 'cabinetAction')->name('cabinet');

});
