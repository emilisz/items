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

Route::get('/', 'CategoriesController@index');
Route::get('/category/{id}', 'CategoriesController@show');
Route::get('/create', 'CategoriesController@create');
Route::post('/create', 'CategoriesController@store');
Route::get('/category/{id}/edit', 'CategoriesController@edit');
Route::put('/category/{id}', 'CategoriesController@update');
Route::delete('/category/{id}/destroy', 'CategoriesController@destroy');