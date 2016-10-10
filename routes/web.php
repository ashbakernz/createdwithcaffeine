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

Route::get('/categories', 'CategoriesController@index');
Route::get('/discussion/{id}', 'DiscussionsController@view');
Route::get('/discussions', 'DiscussionsController@index');


Route::post('/reply/add', 'RepliesController@add');


Route::get('/home', 'HomeController@index');

Route::get('profile', 'UserController@profile');

Route::post('profile', 'UserController@update_avatar');
