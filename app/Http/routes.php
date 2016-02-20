<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//produtos
Route::get('/produtos', 'ProdutosController@index');
Route::get('produtoCreate', 'ProdutosController@create');
Route::post('produtoStore', 'ProdutosController@store');
Route::get('produtoDestroy/{id}', 'ProdutosController@destroy');
Route::get('produtoEdit/{id}', 'ProdutosController@edit');
Route::post('produtoUpdate/{id}', 'ProdutosController@update');

//clientes
Route::get('/clientes', 'ClienteController@index');
Route::post('clienteSave', 'ClienteController@save');
Route::post('clienteUpdate/{id}', 'ClienteController@update');
Route::get('clienteDestroy/{id}', 'ClienteController@destroy');