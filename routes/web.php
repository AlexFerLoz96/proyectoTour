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

Route::get('/', 'ComercioController@public')->name('comercio.public');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/comercio/search', 'ComercioController@search')->name('comercio.search');

Route::get('/user', 'UserController@index')->middleware(['admin'])->name('user.index');
Route::get('/user/create', 'UserController@create')->middleware(['admin'])->name('user.create');
Route::post('/user/store', 'UserController@store')->middleware(['admin'])->name('user.store');
Route::get('/user/{id}', 'UserController@show')->middleware(['admin'])->name('user.show');
Route::get('/user/{id}/edit', 'UserController@edit')->middleware(['admin'])->name('user.edit');
Route::put('/user/{id}', 'UserController@update')->middleware(['admin'])->name('user.update');
Route::delete('/user/{id}/borrar', 'UserController@destroy')->middleware(['admin'])->name('user.destroy');


Route::get('/categoria', 'CategoriaController@index')->middleware(['admin'])->name('categoria.index');
Route::get('/categoria/public', 'CategoriaController@public')->middleware(['admin'])->name('categoria.public'); 
Route::get('/categoria/create', 'CategoriaController@create')->middleware(['admin'])->name('categoria.create');
Route::post('/categoria/store', 'CategoriaController@store')->middleware(['admin'])->name('categoria.store');
Route::get('/categoria/{id}', 'CategoriaController@show')->middleware(['admin'])->name('categoria.show');
Route::get('/categoria/{id}/edit', 'CategoriaController@edit')->middleware(['admin'])->name('categoria.edit');
Route::put('/categoria/{id}', 'CategoriaController@update')->middleware(['admin'])->name('categoria.update');
Route::delete('/categoria/{id}/borrar', 'CategoriaController@destroy')->middleware(['admin'])->name('categoria.destroy');


Route::get('/comercio', 'ComercioController@index')->middleware(['admin'])->name('comercio.index');
Route::get('/comercio/create', 'ComercioController@create')->middleware(['admin'])->name('comercio.create');
Route::post('/comercio/store', 'ComercioController@store')->middleware(['admin'])->name('comercio.store');
Route::get('/comercio/public/{id}', 'ComercioController@show')->name('comercio.public');
Route::get('/comercio/{id}/edit', 'ComercioController@edit')->middleware(['admin'])->name('comercio.edit');
Route::put('/comercio/{id}', 'ComercioController@update')->middleware(['admin'])->name('comercio.update');
Route::delete('/comercio/{id}/borrar', 'ComercioController@destroy')->middleware(['admin'])->name('comercio.destroy');

Route::get('/imagen', 'ImagenController@index')->middleware(['admin'])->name('imagen.index');
Route::get('/imagen/create', 'ImagenController@create')->middleware(['admin'])->name('imagen.create');
Route::post('/imagen/store', 'ImagenController@store')->middleware(['admin'])->name('imagen.store');
Route::get('/imagen/{id}', 'ImagenController@show')->middleware(['admin'])->name('imagen.show');
Route::get('/imagen/{id}/edit', 'ImagenController@edit')->middleware(['admin'])->name('imagen.edit');
Route::put('/imagen/{id}', 'ImagenController@update')->middleware(['admin'])->name('imagen.update');
Route::delete('/imagen/{id}/borrar', 'ImagenController@destroy')->middleware(['admin'])->name('imagen.destroy');

Route::get('/resena', 'ResenaController@index')->middleware(['admin'])->name('resena.index');
Route::get('/resena/create', 'ResenaController@create')->middleware(['admin'])->name('resena.create');
Route::post('/resena/store', 'ResenaController@store')->middleware(['admin'])->name('resena.store');
Route::get('/resena/{id}', 'ResenaController@show')->middleware(['admin'])->name('resena.show');
Route::get('/resena/{id}/edit', 'ResenaController@edit')->middleware(['admin'])->name('resena.edit');
Route::put('/resena/{id}', 'ResenaController@update')->middleware(['admin'])->name('resena.update');
Route::delete('/resena/{id}/borrar', 'ResenaController@destroy')->middleware(['admin'])->name('resena.destroy');

Route::get('/modelo', 'ModeloController@index')->middleware(['admin'])->name('modelo.index');
Route::get('/modelo/create', 'ModeloController@create')->middleware(['admin'])->name('modelo.create');
Route::post('/modelo/store', 'ModeloController@store')->middleware(['admin'])->name('modelo.store');
Route::get('/modelo/{id}', 'ModeloController@show')->middleware(['admin'])->name('modelo.show');
Route::get('/modelo/{id}/edit', 'ModeloController@edit')->middleware(['admin'])->name('modelo.edit');
Route::put('/modelo/{id}', 'ModeloController@update')->middleware(['admin'])->name('modelo.update');
Route::delete('/modelo/{id}/borrar', 'ModeloController@destroy')->middleware(['admin'])->name('modelo.destroy');

Route::get('/lugar', 'LugarController@index')->middleware(['admin'])->name('lugar.index');
Route::get('/lugar/create', 'LugarController@create')->middleware(['admin'])->name('lugar.create');
Route::post('/lugar/store', 'LugarController@store')->middleware(['admin'])->name('lugar.store');
Route::get('/lugar/{id}', 'LugarController@show')->middleware(['admin'])->name('lugar.show');
Route::get('/lugar/{id}/edit', 'LugarController@edit')->middleware(['admin'])->name('lugar.edit');
Route::put('/lugar/{id}', 'LugarController@update')->middleware(['admin'])->name('lugar.update');
Route::delete('/lugar/{id}/borrar', 'LugarController@destroy')->middleware(['admin'])->name('lugar.destroy');

Route::get('/opcion', 'OpcionController@index')->middleware(['admin'])->name('opcion.index');
Route::get('/opcion/create', 'OpcionController@create')->middleware(['admin'])->name('opcion.create');
Route::post('/opcion/store', 'OpcionController@store')->middleware(['admin'])->name('opcion.store');
Route::get('/opcion/{id}', 'OpcionController@show')->middleware(['admin'])->name('opcion.show');
Route::get('/opcion/{id}/edit', 'OpcionController@edit')->middleware(['admin'])->name('opcion.edit');
Route::put('/opcion/{id}', 'OpcionController@update')->middleware(['admin'])->name('opcion.update');
Route::delete('/opcion/{id}/borrar', 'OpcionController@destroy')->middleware(['admin'])->name('opcion.destroy');
