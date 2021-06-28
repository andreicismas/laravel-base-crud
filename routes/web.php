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

// match(["put","patch"] prende uno o laltro  \\ edita i dati al db di un utente gia esidtente
Route::match(["PUT","PATCH"],'/comics/{comic}', 'ComicController@update')->name('comics.update');

// elimina i dati dal db
Route::delete('/comics/{comic}', 'ComicController@destroy')->name('comics.destroy');

Route::get('/comics/{comic}/edit', 'ComicController@edit')->name('comics.edit');

