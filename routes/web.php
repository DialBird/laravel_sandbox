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

Route::get('/', function () {
    return view('welcome');
});
Route::get('book', 'BookController@index');
Route::get('book/create', 'BookController@create');
Route::get('book/{id}', 'BookController@show');
Route::post('book', 'BookController@store');
Route::get('book/{id}/edit', 'BookController@edit');
Route::put('book/{id}', 'BookController@update');
Route::delete('book/{id}', 'BookController@destroy');
