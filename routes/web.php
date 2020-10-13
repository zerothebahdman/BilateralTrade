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
Route::get('/about', function () {
    return view('about');
});
Route::get('/contactus', function () {
    return view('contact');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/downloads', function () {
    return view('downloads');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::any('{slug}', 'HomeController@index')->name('home');