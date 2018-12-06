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
    return view('guest.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('admin.index');
Route::resource('/home', 'HomeController');

Route::resource('/class', 'KelasController');

Route::get('/gallery', function() {
	return view('guest.gallery');
});

Route::get('/events', function() {
	return view('guest.events');
});