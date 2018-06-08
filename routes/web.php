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

Route::get('/vivienda/lista', 'ViviendaController@lista')->name('vivienda-lista');

Route::get('tipo-vivienda/add', 'TipoViviendaController@add');

Route::post('tipo-vivienda/agregar', 'TipoViviendaController@agregarDesdePost');

Route::get('vivienda/add', 'ViviendaController@mostrarFormAdd');

Route::post('vivienda/agregar', 'ViviendaController@agregarDesdePost');