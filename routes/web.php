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

Route::group(['middleware' => ['web']], function (){
    Route::group(['prefix' => 'contato'], function() {
        Route::post('salvar/{contato}', ['uses' => 'ContatoController@save']);
        Route::put('atualizar/{contato}', ['uses' => 'ContatoController@save']);
        Route::get('pesquisar/{contato}', ['uses' => 'ContatoController@find']);
        Route::delete('deletar/{id}', ['uses' => 'ContatoController@delete']);
        
//        Route::get('contato/salvar/{contato}', function ($contato) {
//            return "Contato: $contato";
////            return 'Contato: '.$id;//comando acima e equivalente a este
//        });
    });
});
