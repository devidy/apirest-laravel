<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/funcionarios', 'FuncionarioController@index');
Route::get('/funcionarios/{funcionario}', 'FuncionarioController@show');
Route::post('/funcionarios', 'FuncionarioController@store');
Route::put('/funcionarios/{funcionario}', 'FuncionarioController@update');
Route::delete('/funcionarios/{funcionario}', 'FuncionarioController@destroy');