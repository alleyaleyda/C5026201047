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

//Tugas Input Ngoding PWEB ke Laravel
Route::get('praktikum1', function () {
    return view('prak1pweb'); //kalo udah konek model, ini gabisa dipakai
});

Route::get('tugas4', function () {
    return view('tugas4pweb'); //kalo udah konek model, ini gabisa dipakai
});

Route::get('praktikum2', 'ViewController@showPraktikum2');

Route::get('ets', 'ViewController@showETS');

Route::get('perhitungan', 'ViewController@showPerhitungan');

Route::post('fungsi', 'ViewController@showFungsi');


// Tugas CRUD Pegawai
Route::get('/pegawai','PegawaiController@index');

Route::get('/pegawai/tambah','PegawaiController@tambah');

Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');

Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

Route::get('/pegawai/cari','PegawaiController@cari');

Route::get('/pegawai/detail/{id}','PegawaiController@view');


//Tugas CRUD Absen
Route::get('/absen','AbsenController@index');

Route::get('/absen/input','AbsenController@input');

Route::post('/absen/store','AbsenController@store');

Route::get('/absen/edit/{id}','AbsenController@edit');

Route::post('/absen/update','AbsenController@update');

Route::get('/absen/hapus/{id}','AbsenController@hapus');

//Praktikum Kaos Mingdep
Route::get('/kaos','KaosController@index');

Route::get('/kaos/tambah','KaosController@tambah');

Route::post('/kaos/store','KaosController@store');

Route::get('/kaos/edit/{id}','KaosController@edit');

Route::post('/kaos/update','KaosController@update');

Route::get('/kaos/hapus/{id}','KaosController@hapus');

Route::get('/kaos/cari','KaosController@cari');

Route::get('/kaos/detail/{id}','KaosController@view');

