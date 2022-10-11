<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtoresController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('atores', [AtoresController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/atores/create', [AtoresController::class, 'create']);

Route::post('/atores/store', [AtoresController::class, 'store']);


Route::group(['prefix' => 'atores', 'where' => ['id' => '[0-9]+']], function () {
    Route::get('',                  ['as' => 'atores',  'uses' => '\App\Http\Controllers\AtoresController@index']);
    Route::get('create',            ['as' => 'atores.create',     'uses' => '\App\Http\Controllers\AtoresController@create']);
    Route::get('{id}/destroy',      ['as' => 'atores.destroy',    'uses' => '\App\Http\Controllers\AtoresController@destroy']);
    Route::get('{id}/edit',         ['as' => 'atores.edit',       'uses' => '\App\Http\Controllers\AtoresController@edit']);
    Route::put('{id}/update',       ['as' => 'atores.update',     'uses' => '\App\Http\Controllers\AtoresController@update']);
    Route::post('store',             ['as' => 'atores.store',  'uses' => '\App\Http\Controllers\AtoresController@store']);
});
