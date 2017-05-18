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

Route::get('/', 'PageController@algemeen')->name('algemeen');

Route::get('/scholen', 'PageController@scholen')->name('scholen');
Route::get('/school/{school}', 'PageController@school')->name('school');
Route::get('/opleiding/{course}', 'PageController@opleiding')->name('opleiding');

Route::get('/testimonials', 'PageController@testimonials')->name('testimonials');
Route::get('/testimonial/{testimonial}', 'PageController@testimonial')->name('testimonial');

Route::get('/nieuws', 'PageController@nieuws')->name('nieuws');
Route::get('/artikel/{article}', 'PageController@artikel')->name('artikel');

Route::get('/studentengids', 'PageController@studentengids')->name('studentengids');

Route::get('/zoeken', 'PageController@zoeken')->name('zoeken');
