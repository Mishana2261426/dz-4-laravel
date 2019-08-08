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

Route::get('/authors', 'AuthorsController@index');
Route::get('/authors-add', 'AuthorsController@addPage');
Route::post('/authors', 'AuthorsController@store');
Route::get('/authors/{author}', 'AuthorsController@show');
Route::post('/authors/{author}', 'AuthorsController@update');
Route::get('/authors/{author}/delete', 'AuthorsController@delete');