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
Route::get('/artikel/{article}', 'PageController@artikel')->name('artikel');

Route::get('/scholen', 'PageController@scholen')->name('scholen');
Route::get('/school/{school}', 'PageController@school')->name('school');
Route::get('/opleiding/{course}', 'PageController@opleiding')->name('opleiding');

Route::get('/vrijetijd', 'PageController@vrije_tijd')->name('vrije_tijd');

Route::get('/omgeving', 'PageController@omgeving')->name('omgeving');

Route::get('/testimonials', 'PageController@testimonials')->name('testimonials');
Route::get('/testimonial/{id}', 'PageController@testimonial')->name('testimonial');

Route::get('/zoeken', 'PageController@zoeken')->name('zoeken');
