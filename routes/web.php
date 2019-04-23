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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/categorias', 'CategoriasController@getAll')->name('categorias');
Route::get('/categorias', 'CategoriasController@getAll')->name('categorias');
Route::get('categorias/nueva', 'CategoriasController@nueva')->name('nueva-categoria');
Route::POST('categorias/save', 'CategoriasController@save')->name('save-categoria');
Route::get('categorias/editar/{id}', 'CategoriasController@editar')->name('editar-categoria');
Route::POST('categorias/update', 'CategoriasController@update')->name('update-categoria');
Route::get('categorias/eliminar/{id}', 'CategoriasController@eliminar')->name('eliminar-categoria');
Route::POST('categorias/borrar', 'CategoriasController@borrar')->name('borrar-categoria');
