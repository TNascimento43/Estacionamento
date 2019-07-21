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
    return view('index');
});
Route::get('/veiculo', 'ControladorVeiculo@index');
Route::get('/vagas', 'ControladorVagas@index');
Route::get('/veiculo/apagar/{vaga}', 'ControladorVeiculo@destroy');
Route::get('/veiculo/editar/{vaga}', 'ControladorVeiculo@edit');

Route::post('/veiculo', 'ControladorVeiculo@store');
Route::post('/veiculo/{id}', 'ControladorVeiculo@update' );
