<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::resource('usuarios', 'UsuariosController');

Route::resource('recetas', 'RecetasController');
Route::resource('ingredientes', 'IngredientesController');

//modulo de administración
Route::get('/admin', 'AdminController@index');
Route::get('/admin/usuarios/participantes', 'AdminController@participantes');
Route::get('/admin/reportes/participantesporestado', 'AdminController@participantesPorEstado');
