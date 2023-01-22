<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Registrate;

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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/test', 'Registrate@test');

Route::get('/registration', function(){
    return view('registrate');
})->name('page-reg');

Route::post('/registration/submit', 'Registrate@newUser')->name('add-user');

Route::get('/account', function(){
    return view('account');
})->name('page-account');
