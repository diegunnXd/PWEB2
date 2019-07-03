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
Route::group(['prefix'=>'funcionarios','where'=>['id'=>'[0-9]+']], function() {

    Route::get('',['as' => 'funcionarios', 'uses' => 'funcionariosController@index']);

    Route::get('create',['as'=>'funcionarios.create', 'uses' =>'funcionariosController@create']);

    Route::post('store',['as'=>'funcionarios.store','uses'=>'funcionariosController@store']);

    Route::get('{id}/destroy',['as'=>'funcionarios.destroy','uses'=>'funcionariosController@destroy']);

    Route::get('{id}/edit',['as'=>'funcionarios.edit','uses'=>'funcionariosController@edit']); 

    Route::put('{id}/update',['as'=>'funcionarios.update','uses'=>'funcionariosController@update']);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
