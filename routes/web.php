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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/siswa', 'SiswaController');
Route::resource('/guruwalas', 'GuruWalasController');
Route::resource('/gurumapel', 'GuruMapelController');
Route::resource('/kelas', 'KelasController');
Route::resource('/jadwal', 'JadwalController');
Route::resource('/mapel', 'MapelController');
Route::resource('/laporan', 'LaporanController');
Route::resource('/tahunajaran', 'TahunAjaranController');