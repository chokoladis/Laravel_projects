<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\RegistrateController;
// use App\Http\Controllers\LoginController;
// use App\Http\Controllers\LogoutController;

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   

    Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){   

        Route::get('/todolist', 'AdminController@index')->name('admin.index');
        
    });

    Route::get('/', function () {
        return view('homepage');
    });
    
    // BLOCK TODOLIST
    // Route::get('/todolist', 'ToDoListController@index')->name('page-todolist');
    Route::get('/todolist', 'ToDoListController@indexPaginate')->name('todolist.index');

    Route::get('/todolist/create', 'ToDoListController@create')->name('todolist.create');
    Route::post('/todolist', 'ToDoListController@store')->name('todolist.store');

    Route::get('/todolist/task_{id}/edit', 'ToDoListController@edit')->name('todolist.edit');
    Route::post('/todolist/task_{id}', 'ToDoListController@update')->name('todolist.update');

    // Route::post('/todolist/task_{id}/delete/submit', 'ToDoListController@delTaskSubmit')->name('page-todolist-del-submit');
    Route::get('/todolist/task_{id}', 'ToDoListController@destroy')->name('todolist.destroy');
    
    
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

