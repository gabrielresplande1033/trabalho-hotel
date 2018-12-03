<?php

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

Route::get('/usuarios','UsuariosController@index');

Route::group(['middleware' => 'web'], function (){
    Route::get('/', 'WelcomeController@index')->name('welcome.index');

    Route::auth();

    Route::get('/home','WelcomeController@index')->name('home');

    Route::get('/lista','ListaHoteisController@index')->name('lista');

    Route::get('/hotel', 'HotelController@index')->name('hotel');

    Route::get('/teste', 'HotelController@store')->name('hotel');

});