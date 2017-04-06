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

Auth::routes();

Route::get('/', 'PageController@nieuws')->name('nieuws');
Route::get('/artikel/{id}', 'PageController@artikel')->name('artikel');
Route::get('/scholen', 'PageController@scholen')->name('scholen');
Route::get('/vrijetijd', 'PageController@vrijetijd')->name('vrijetijd');
Route::get('/omgeving', 'PageController@omgeving')->name('omgeving');
Route::get('/testimonials', 'PageController@testimonials')->name('testimonials');
