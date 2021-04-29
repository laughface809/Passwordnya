<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::post('/akuns', 'App\Http\Controllers\AkunController@store');
//Route::get('/passwords', 'App\Http\Controllers\PasswordController@index');
Route::get('/akuns', 'App\Http\Controllers\AkunController@index');
Route::get('/akuns/create', 'App\Http\Controllers\AkunController@create');

