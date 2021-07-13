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
    return view('welcome');
});

Auth::routes();

Route::get('/p/create', 'PostsController@create');
Route::get('/p/{post}/edit', 'PostsController@edit')->name('post.edit');
Route::patch('/p/{post}', 'PostsController@update')->name('post.update');
Route::get('/p/{post}', 'PostsController@images')->name('post.show');
Route::post('/p', 'PostsController@store');
Route::delete('/p/{post}', 'PostsController@destroy');

Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfileController@update')->name('profile.update');
Route::delete('/profile/{user}', 'ProfileController@destroy')->name('profile.destroy');

Route::get('/search', 'SearchController@index');
Route::get('/search/{post}', 'SearchController@show');
Route::get('/search/{post}/images', 'SearchController@images')->name('search.show');

Route::get('/admin', 'AdminController@index');
