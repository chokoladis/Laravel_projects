<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\RegistrateController;
// use App\Http\Controllers\LoginController;
// use App\Http\Controllers\LogoutController;

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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    
    Route::get('/', function () {
        return view('homepage');
    });
    
    // BLOCK TODOLIST
    Route::get('/todolist', 'ToDoListController@show')->name('page-todolist');

    Route::post('/todolist/add', 'ToDoListController@addTask')->name('page-todolist-add');
    
    
    // BLOCK ACCOUNT USER
    Route::get('/account', function(){
        return view('account');
    })->name('page-account');

    
    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/registration', 'RegistrateController@show')->name('page-reg');
        Route::post('/registration', 'RegistrateController@newUser')->name('add-user');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('page-login');
        Route::post('/login', 'LoginController@login')->name('login-submit');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('page-logout');
    });
});

