<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\RegistrateController;
// use App\Http\Controllers\LoginController;
// use App\Http\Controllers\LogoutController;

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    
    Route::get('/', function () {
        return view('homepage');
    });
    
    // BLOCK TODOLIST
    Route::get('/todolist', 'ToDoListController@show')->name('page-todolist');

    Route::get('/todolist/add', 'ToDoListController@addTask')->name('page-todolist-add');
    Route::post('/todolist/add', 'ToDoListController@addTaskSubmit')->name('page-todolist-add-submit');

    Route::get('/todolist/task_{id}/update', 'ToDoListController@updTask')->name('page-todolist-upd');
    Route::post('/todolist/task_{id}/update', 'ToDoListController@updTaskSubmit')->name('page-todolist-upd-submit');

    // Route::post('/todolist/task_{id}/delete/submit', 'ToDoListController@delTaskSubmit')->name('page-todolist-del-submit');
    Route::get('/todolist/task_{id}/delete/submit', 'ToDoListController@delTaskSubmit')->name('page-todolist-del-submit');
    
    
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

