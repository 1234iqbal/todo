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

Route::get('/todo', 'todoController@show');
Route::post('/todo', 'todoController@store');
Route::get('/{id}', 'todoController@edit');
Route::put('/{id}', 'todoController@update');
Route::delete('/{id}', 'todoController@destroy');