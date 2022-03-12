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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/','PlayersController@index');
// Route::get('/index','PlayersController@index');
//Todolist用
Route::get('', 'TodolistController@index');
Route::get('/create', 'TodolistController@create');
Route::post('', 'TodolistController@store');
Route::get('/{id}', 'TodolistController@show');
Route::get('/{id}/edit', 'TodolistController@edit');
Route::put('/{id}', 'TodolistController@update');
Route::delete('/{id}', 'TodolistController@destroy');