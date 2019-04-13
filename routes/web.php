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

Route::get('/book', function () {
    return view('admin.booking.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// // data book
// Route::get('/book','EditController@index');
// Route::get('/book', 'EditController@edit');
// Route::get('/book/{id}/edit'.);

Route::get('admin','AdminController@index');

// Jadwal Kereta
// Route::get('schedule','TrainController@index');    
// Route::get('schedule/add-jadwal', 'TrainController@input');
// Route::post('schedule', 'TrainController@store');
// Route::get('/schedule/{id}/edit', "TrainController@edit");
// Route::patch('/schedule/{id}', 'TrainController@update');

// Stasiun Kereta

// Jadwal Pesawat

// Nama Pesawat

// Bandara

