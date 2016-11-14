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
Route::get('admin', 'AdminController@index');
Route::resource('admin/jueces', 'JudgeController');
Route::resource('admin/participantes', 'ParticipantController');

//Route::resource('admin/criterios', 'CriteriosController');
//Route::resource('admin/votaciones', 'VotacionesController');
//Route::get('admin/usuarios/participantes', 'AdminController@participantes');
//Route::get('admin/recetas/recetas', 'AdminController@recetas');
//Route::get('admin/reportes/participantesporestado', 'AdminController@participantesPorEstado');
