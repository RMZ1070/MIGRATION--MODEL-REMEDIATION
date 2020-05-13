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

Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/post', 'PostController@index')->name('post');
route::get('/edit/{id}','PostController@edit')->name('edit');
route::get('/show/{id}','PostController@show')->name('show');
route::post('/update/{id}','PostController@update')->name('update');
route::get('/destroy/{id}','PostController@destroy')->name('destroy');
Route::post('/postsave', 'PostController@store')->name('postsave');
Route::get('/home', 'HomeController@index')->name('home');
