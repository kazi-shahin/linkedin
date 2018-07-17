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


/*
|--------------------------------------------------------------------------
| Backend Settings Section Routs
|--------------------------------------------------------------------------
*/
Route::get('/login','AuthenticationController@getLogin');
Route::post('/login','AuthenticationController@postLogin');
Route::get('/logout','AuthenticationController@logout');

Route::get('/','HomeController@index');
Route::get('dashboard','HomeController@index');


