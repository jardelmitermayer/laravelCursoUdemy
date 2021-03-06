<?php

use App\Http\Controllers\ClienteControlador;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

//Route::get('produtos', 'App\Http\Controllers\MeuControlador@produtos');
Route::get('nome', 'App\Http\Controllers\MeuControlador@getNome');
Route::get('idade', 'App\Http\Controllers\MeuControlador@getIdade');
Route::get('multiplicar/{n1}/{n2}', 'App\Http\Controllers\MeuControlador@multiplicar');

Route::resource('clientes', 'App\Http\Controllers\ClienteControlador');

Route::get('produtos', function(){
    return view('outras.produtos');
})->name('produtos');

Route::get('departamento', function(){
    return view('outras.departamentos');
})->name('departamentos');

Route::get('opcoes/{opcao?}', function($opcao=null){
    return view('outras.opcoes', compact(['opcao']));
})->name('opcoes');


Route::get('bootstrap', function(){
    return view('outras.exemplo');
});