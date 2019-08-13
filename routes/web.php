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
Route::post('/authors/{author}/update', 'AuthorsController@update');
Route::get('/authors/{author}/delete', 'AuthorsController@delete');

Route::get('/authors/sorted/asc/id', 'AuthorsSortedController@id_sortASC');
Route::get('/authors/sorted/desc/id', 'AuthorsSortedController@id_sortDESC');

Route::get('/authors/sorted/asc/name', 'AuthorsSortedController@name_sortASC');
Route::get('/authors/sorted/desc/name', 'AuthorsSortedController@name_sortDESC');

Route::get('/books', 'BooksController@index');
Route::get('/books-add', 'BooksController@addPage');
Route::post('/books', 'BooksController@store');
Route::post('/books/{book}/update', 'BooksController@update');
Route::get('/books/{book}/delete', 'BooksController@delete');

Route::get('/books/sorted/asc/id', 'BooksSortedController@id_sortASC');
Route::get('/books/sorted/desc/id', 'BooksSortedController@id_sortDESC');

Route::get('/books/sorted/asc/name', 'BooksSortedController@name_sortASC');
Route::get('/books/sorted/desc/name', 'BooksSortedController@name_sortDESC');

Route::get('/books/sorted/asc/publish_year', 'BooksSortedController@publish_year_sortASC');
Route::get('/books/sorted/desc/publish_year', 'BooksSortedController@publish_year_sortDESC');

Route::get('/books/sorted/asc/author', 'BooksSortedController@author_sortASC');
Route::get('/books/sorted/desc/author', 'BooksSortedController@author_sortDESC');

Route::post('/books/search', 'BooksController@search');