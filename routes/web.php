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

Route::get('/admin','AdminController@index');

Route::get('/admin/videos','AdminController@videos');
Route::get('/admin/videos/add','AdminController@addVideo');
Route::get('/admin/videos/delete/{id}','AdminController@deleteVideo');
Route::post('/admin/videos/save','AdminController@saveNewVideo');

Route::get('/admin/users','AdminController@users');
Route::get('/admin/users/delete/{id}','AdminController@deleteUser');

Route::get('/video/{id}', 'CategoriesController@viewVideo');

Route::get('/categories', 'CategoriesController@index');
Route::get('/categories/css', 'CategoriesController@sortByCSS');
Route::get('/categories/laravel', 'CategoriesController@sortByLaravel');
Route::get('/categories/misc', 'CategoriesController@sortByMisc');

Route::get('/discussion/{id}', 'DiscussionsController@view');
Route::get('/discussion/delete/{id}', 'DiscussionsController@delete');
Route::get('/discussions/add', 'DiscussionsController@addDiscussion');
Route::post('/discussions/save', 'DiscussionsController@saveNewDiscussion');
Route::get('/discussions', 'DiscussionsController@index');


Route::post('/reply/add', 'RepliesController@add');
Route::get('/reply/delete/{post_id}/{reply_id}', 'RepliesController@delete');


Route::get('/home', 'HomeController@index');

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');

