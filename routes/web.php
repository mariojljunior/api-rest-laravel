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
})->name('inicio');

Route::get('deletar/{id}', 'App\Http\Controllers\EnderecoController@destroy')->name('deletar_enderecos');
Route::get('editar/{id}', 'App\Http\Controllers\EnderecoController@edit')->name('editar_enderecos');
Route::get('criar', 'App\Http\Controllers\EnderecoController@create')->name('criar_enderecos');
Route::get('mostrar', 'App\Http\Controllers\EnderecoController@show')->name('mostrar_enderecos');

Route::post('editar/{id}', 'App\Http\Controllers\EnderecoController@update')->name('atualizar_enderecos');

Route::post('mostrar', 'App\Http\Controllers\EnderecoController@store')->name('salvar_enderecos');
