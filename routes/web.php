<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | This file is where you may define all of the routes that are handled
  | by your application. Just tell Laravel the URIs it should respond
  | to using a Closure or controller method. Build something great!
  |
 */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
/*
site controller
*/

Route::get('/', 'site@index');
Route::get('page/{page_slug}/{id}', 'site@page');
Route::get('/services/', 'site@services');

/*
post controller
*/

Route::get('/all-post', 'post@index');

Route::get('/new-post', 'post@create');
Route::get('/edit-post/{id}', 'post@edit');
Route::post('update', 'post@update');

Route::get('delete-post/{id}', 'post@destroy');
Route::resource('/save', 'post@store');

Route::get('/post-details/{id}', 'post@show');


Route::get('menu/', 'settingsController@menu');
Route::post('menu-update', 'settingsController@menu_update');

Route::get('theme-option/', 'settingsController@theme_option');
Route::post('logo-uploads', 'settingsController@uploads');

