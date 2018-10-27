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

Route::view('/','welcome');

// Route::get('/', function () {
// 	return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/produtos', 'ProdutosController@index')->name('produtos');
Route::get('/produtos/add', 'ProdutosController@add');//->name('produtos');
Route::post('/produtos/add', 'ProdutosController@salvar');
Route::post('/produtos/alterar/{id}', 'ProdutosController@alterar');
Route::get('/produtos/excluir/{id}', 'ProdutosController@excluir');
Route::get('/produtos/editar/{id}', 'ProdutosController@editar');
// Route::get('/produtos/add', function(){
// 	return view('errors.403');
// });