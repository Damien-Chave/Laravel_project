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

// PAGES
Route::get('/', 'PagesController@getIndex');
Route::get('about', 'PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');

// POSTS
Route::resource('posts', 'PostController');

//AUTH
Auth::routes();
//Route::resource('auth.register', 'RegisterController')
//Route::resource('auth.login', 'Auth/LoginController')

Route::get('/home', 'HomeController@index')->name('home');
