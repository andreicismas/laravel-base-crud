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

//prendo tutti dati da table comics -@index
Route::get('/', 'ComicController@index')->name('comics.index'); 

//creiamo nuovo fumetto -@create pagina con form
Route::get('/comics/create', 'ComicController@create')->name('comics.create'); 

//metodo post per imagazzinare dati -@store
Route::post('/comics', 'ComicController@store')->name('comics.store'); 

//prendo singolo fumetto da table -@show
Route::get('/comics/{comic}', 'ComicController@show')->name('comics.show');


Route::match(["put","patch"],'/comics/{comic}', 'ComicController@update')->name('comics.update');

Route::get('/comics/{comic}/edit', 'ComicController@edit')->name('comics.edit');

