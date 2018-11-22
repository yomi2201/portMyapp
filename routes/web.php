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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('home', 'PostsController@index');

Route::get('/', 'PostsController@index')->name('home');
Route::get('create', 'PostsController@create');
Route::post('create', 'PostsController@store');
Route::get('edit/{id}', 'PostsController@edit');
Route::post('edit', 'PostsController@update');
Route::get('delete/{id}', 'PostsController@show');
Route::post('delete', 'PostsController@delete');
// Route::resource('/posts', 'PostsController', ['only' => ['create', 'store']]);
