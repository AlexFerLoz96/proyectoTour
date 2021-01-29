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

Route::get('/user', 'UserController@index')->name('user.index');
Route::get('/user/create', 'UserController@create')->name('user.create');
Route::post('/user/store', 'UserController@store')->name('user.store');
Route::get('/user/{id}', 'UserController@show')->name('user.show');
Route::get('/user/{id}/edit', 'UserController@edit')->name('user.edit');
Route::put('/user/{id}', 'UserController@update')->name('user.update');
Route::delete('/user/{id}/borrar', 'UserController@destroy')->name('user.destroy');


Route::get('/categoria', 'CategoriaController@index')->name('categoria.index');
Route::get('/categoria/create', 'CategoriaController@create')->name('categoria.create');
Route::post('/categoria/store', 'CategoriaController@store')->name('categoria.store');
Route::get('/categoria/{id}', 'CategoriaController@show')->name('categoria.show');
Route::get('/categoria/{id}/edit', 'CategoriaController@edit')->name('categoria.edit');
Route::put('/categoria/{id}', 'CategoriaController@update')->name('categoria.update');
Route::delete('/categoria/{id}/borrar', 'CategoriaController@destroy')->name('categoria.destroy');


Route::get('/comercio', 'ComercioController@index')->name('comercio.index');
Route::get('/comercio/create', 'ComercioController@create')->name('comercio.create');
Route::post('/comercio/store', 'ComercioController@store')->name('comercio.store');
Route::get('/comercio/{id}', 'ComercioController@show')->name('comercio.show');
Route::get('/comercio/{id}/edit', 'ComercioController@edit')->name('comercio.edit');
Route::put('/comercio/{id}', 'ComercioController@update')->name('comercio.update');
Route::delete('/comercio/{id}/borrar', 'ComercioController@destroy')->name('comercio.destroy');
