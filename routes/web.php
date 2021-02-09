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
    return view('main/index');
});

Route::get('/', 'ComercioController@public')->name('comercio.public');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/user', 'UserController@index')->name('user.index');
Route::get('/user/create', 'UserController@create')->name('user.create');
Route::post('/user/store', 'UserController@store')->name('user.store');
Route::get('/user/{id}', 'UserController@show')->name('user.show');
Route::get('/user/{id}/edit', 'UserController@edit')->name('user.edit');
Route::put('/user/{id}', 'UserController@update')->name('user.update');
Route::delete('/user/{id}/borrar', 'UserController@destroy')->name('user.destroy');


Route::get('/categoria', 'CategoriaController@index')->name('categoria.index');
Route::get('/categoria/public', 'CategoriaController@public')->name('categoria.public'); 
Route::get('/categoria/create', 'CategoriaController@create')->name('categoria.create');
Route::post('/categoria/store', 'CategoriaController@store')->name('categoria.store');
Route::get('/categoria/{id}', 'CategoriaController@show')->name('categoria.show');
Route::get('/categoria/{id}/edit', 'CategoriaController@edit')->name('categoria.edit');
Route::put('/categoria/{id}', 'CategoriaController@update')->name('categoria.update');
Route::delete('/categoria/{id}/borrar', 'CategoriaController@destroy')->name('categoria.destroy');


Route::get('/comercio', 'ComercioController@index')->name('comercio.index');
Route::get('/comercio/public', 'ComercioController@public')->name('comercio.public');
Route::get('/comercio/create', 'ComercioController@create')->name('comercio.create');
Route::post('/comercio/store', 'ComercioController@store')->name('comercio.store');
Route::get('/comercio/{id}', 'ComercioController@show')->name('comercio.show');
Route::get('/comercio/{id}/edit', 'ComercioController@edit')->name('comercio.edit');
Route::put('/comercio/{id}', 'ComercioController@update')->name('comercio.update');
Route::delete('/comercio/{id}/borrar', 'ComercioController@destroy')->name('comercio.destroy');

Route::get('/imagen', 'ImagenController@index')->name('imagen.index');
Route::get('/imagen/create', 'ImagenController@create')->name('imagen.create');
Route::post('/imagen/store', 'ImagenController@store')->name('imagen.store');
Route::get('/imagen/{id}', 'ImagenController@show')->name('imagen.show');
Route::get('/imagen/{id}/edit', 'ImagenController@edit')->name('imagen.edit');
Route::put('/imagen/{id}', 'ImagenController@update')->name('imagen.update');
Route::delete('/imagen/{id}/borrar', 'ImagenController@destroy')->name('imagen.destroy');

Route::get('/resena', 'ResenaController@index')->name('resena.index');
Route::get('/resena/create', 'ResenaController@create')->name('resena.create');
Route::post('/resena/store', 'ResenaController@store')->name('resena.store');
Route::get('/resena/{id}', 'ResenaController@show')->name('resena.show');
Route::get('/resena/{id}/edit', 'ResenaController@edit')->name('resena.edit');
Route::put('/resena/{id}', 'ResenaController@update')->name('resena.update');
Route::delete('/resena/{id}/borrar', 'ResenaController@destroy')->name('resena.destroy');

Route::get('/modelo', 'ModeloController@index')->name('modelo.index');
Route::get('/modelo/create', 'ModeloController@create')->name('modelo.create');
Route::post('/modelo/store', 'ModeloController@store')->name('modelo.store');
Route::get('/modelo/{id}', 'ModeloController@show')->name('modelo.show');
Route::get('/modelo/{id}/edit', 'ModeloController@edit')->name('modelo.edit');
Route::put('/modelo/{id}', 'ModeloController@update')->name('modelo.update');
Route::delete('/modelo/{id}/borrar', 'ModeloController@destroy')->name('modelo.destroy');