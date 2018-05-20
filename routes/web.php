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

Route::get('/', function(){
   return view('welcome');
});

// KATEGORIJU ROUTE

    Route::resource('categories', 'CategoriesController');
//    Route::get('/', 'CategoriesController@index');
//    Route::get('/category/{id}', 'CategoriesController@show');
//    Route::get('/create', 'CategoriesController@create');
//    Route::post('/create', 'CategoriesController@store');
//    Route::get('/category/{id}/edit', 'CategoriesController@edit');
//    Route::put('/category/{id}', 'CategoriesController@update');
//    Route::delete('/category/{id}/destroy', 'CategoriesController@destroy');
// ITEMS ROUTE

    Route::resource('items', 'ItemsController');
//    Route::get('/', 'ItemsController@index');
//    Route::get('/category/{id}', 'ItemsController@show');
//    Route::get('/create', 'ItemsController@create');
//    Route::post('/create', 'ItemsController@store');
//    Route::get('/category/{id}/edit', 'ItemsController@edit');
//    Route::put('/category/{id}', 'ItemsController@update');
//    Route::delete('/category/{id}/destroy', 'ItemsController@destroy');


// MATERIALS ROUTE

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::resource('categories', 'CategoriesController');