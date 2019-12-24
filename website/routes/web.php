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

Route::get('/', 'PagesController@index')->name('dashboard');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/services', 'PagesController@services');

Route::get('/posts/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/store', 'PostsController@store');
Route::get('/posts/show', 'PostsController@show');
Route::get('/posts/edit', 'PostsController@edit');
Route::get('/posts/update', 'PostsController@update');
Route::get('/posts/destroy', 'PostsController@destroy');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
