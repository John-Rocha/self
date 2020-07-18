<?php

use Illuminate\Support\Facades\Route;

Route::get('form', 'JogoController@index')->name('jogo.index');
Route::post('form', 'JogoController@store')->name('jogo.store');

Route::get('/', function () {
    return view('welcome');
});
