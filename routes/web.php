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

// Route::get('/', function () {
//     return view('guest.index');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('admin.index');
Route::resource('/home', 'HomeController');

Route::resource('/events', 'EventsController');

Route::resource('/class', 'KelasController');

Route::resource('/students', 'MuridController');

Route::resource('/galleries', 'GalleryController');

Route::resource('/categories', 'CategoryController');

Route::resource('/teachers', 'GuruController');

Route::get('/', 'FrontendController@index')->name('guest.index');
Route::get('/murid', 'FrontendController@murid');
Route::get('/guru', 'FrontendController@guru');
Route::get('/event', 'FrontendController@event');
Route::get('/galeri', 'FrontendController@galeri');