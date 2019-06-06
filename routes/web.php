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

Route::get('/agenda', 'AgendaController@listar');
Route::get('/agenda/listar', 'AgendaController@listar');
Route::get('/agenda/incluir', 'AgendaController@incluir');
Route::delete('/agenda/remover/{id}', 'AgendaController@remover');
Route::post('/agenda/incluir', 'AgendaController@gravar');
Route::get('/agenda/editar/{id}', 'AgendaController@prepara_edicao');
Route::post('/agenda/editar', 'AgendaController@gravar');
