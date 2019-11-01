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

Route::get('/', 'PersonController@index');
Route::get('/person/{id}', 'PersonController@show');
Route::get('/new_person', 'PersonController@create');
Route::post('/new_person', 'PersonController@store');

Route::get('/pets', 'PetController@index');
Route::get('/pets/{id}', 'PetController@show');