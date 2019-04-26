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
Route::get('logout','LoginController@logout');

// // data book
// Route::get('/book','EditController@index');
// Route::get('/book', 'EditController@edit');
// Route::get('/book/{id}/edit'.);

Route::get('admin','AdminController@index');

// Jadwal Kereta
Route::get('/schedule','KeretaController@index');    
Route::get('/schedule/tambah','KeretaController@jdwlTambah');
Route::post('schedule', 'KeretaController@jdwlStore');
Route::get('schedule/{id}','KeretaController@hapus');
Route::get('schedule/{id}/edit', 'KeretaController@jdwlEdit');
Route::patch('schedule/{id}', 'KeretaController@jdwlUpdate');

// Stasiun Kereta
Route::get('station','KeretaController@station');
Route::get('station/tambah','KeretaController@tambah');
Route::post('station','KeretaController@store');
Route::get('station/{id_stasiun}','KeretaController@destroy');
Route::get('station/{id_stasiun}/edit', 'KeretaController@stationEdit');
Route::patch('station/{id_stasiun}', 'KeretaController@stationUpdate');


// Jadwal Pesawat
Route::get('jadwal','PesawatController@jdwl');
Route::get('jadwal/tambah','PesawatController@jdwlTambah');
Route::post('jadwal', 'PesawatController@jdwlStore');
Route::get('jadwal/{id_jdwlPesawat}/edit','PesawatController@jdwlEdit');
Route::patch('jadwal/{id_jdwlPesawat}', 'PesawatController@jdwlUpdate');
Route::get('jadwal/{id_jdwlPesawat}', 'PesawatController@jdwlHapus');

// Nama Pesawat
Route::get('pesawat','PesawatController@pswt');
Route::get('pesawat/tambah','PesawatController@pswtTambah');
Route::post('pesawat', 'PesawatController@pswtStore');
Route::get('pesawat/{id_pesawat}/edit','PesawatController@pswtEdit');
Route::patch('pesawat/{id_pesawat}', 'PesawatController@pswtUpdate');
Route::get('pesawat/{id_pesawat}', 'PesawatController@pswtHapus');

// Bandara
Route::get('bandara','PesawatController@bndr');
Route::get('bandara/tambah','PesawatController@bndrTambah');
Route::post('bandara', 'PesawatController@bndrStore');
Route::get('bandara/{id_bandara}/edit','PesawatController@bndrEdit');
Route::patch('bandara/{id_bandara}', 'PesawatController@bndrUpdate');
Route::get('bandara/{id_bandara}', 'PesawatController@bndrHapus');

