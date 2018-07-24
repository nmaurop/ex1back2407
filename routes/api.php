<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('resource', 'ProdutoController@showResource');

//Route::get('/produto/{id}', 'MinhaController@getProduto')->name('pegar-produto');

//Route::post('/produto', 'MinhaController@criarProduto')->name('criar-produto');

//Route::put('/produto/{id}', 'MinhaController@atualizarProduto')->name('modificar-produto');

//Route::delete('/produto/{id}', 'MinhaController@deletarProduto')->name('deletar-produto');

Route::apiResource('produto', 'ProdutoController');

Route::apiResource('parceiro', 'ParceiroController');

Route::apiResource('servico', 'ServicoController');
