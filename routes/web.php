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

Route::get('/index', 'site@index');
Route::get('/all-post', 'post@index');
Route::get('/new-post', 'post@create');
Route::get('edit-post/{id}', 'post@edit');
Route::post('update', 'post@update');

Route::get('delete-post/{id}', 'post@destroy');
Route::resource('/save', 'post@store');
