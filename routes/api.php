<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'Bairro'],function(){

    Route::get('index','BairroController@index');
    Route::post('store','BairroController@store');
    Route::put('update','BairroController@update');
    Route::delete('delete','BairroController@delete');

});
Route::group(['prefix'=>'Enquete'],function(){

    Route::get('index','EnqueteController@index');
    Route::post('store','EnqueteController@store');
    Route::put('update','EnqueteController@update');
    Route::delete('delete','EnqueteController@delete');

});
Route::group(['prefix'=>'TipoSolicitacao'],function(){

    Route::get('index','TipoSolicitacaoController@index');
    Route::post('store','TipoSolicitacaoController@store');
    Route::put('update','TipoSolicitacaoController@update');
    Route::delete('delete','TipoSolicitacaoController@delete');

});
Route::group(['prefix'=>'FazSolicitacao'],function(){

    Route::get('index','FazSolicitacaoController@index');
    Route::post('store','FazSolicitacaoController@store');
    Route::put('update','FazSolicitacaoController@update');
    Route::delete('delete','FazSolicitacaoController@delete');

});
Route::group(['prefix'=>'Solicitacao'],function(){

    Route::get('index','SolicitacaoController@index');
    Route::post('store','SolicitacaoController@store');
    Route::put('update','SolicitacaoController@update');
    Route::delete('delete','SolicitacaoController@delete');

});


Route::get('teste',function(){
    return 'teste';
});

