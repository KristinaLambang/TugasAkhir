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

$router->group([
	'middleware' => 'auth',
	],function(){

Route::resource('/siswa', 'SiswaController');
Route::resource('/guruwalas', 'GuruWalasController');
Route::resource('/gurumapel', 'GuruMapelController');
Route::resource('/kelas', 'KelasController');
Route::resource('/jadwal', 'JadwalController');
Route::resource('/mapel', 'MapelController');
Route::resource('/laporan', 'LaporanController');
Route::resource('/laporanleger', 'LaporanLegerController');
Route::resource('/laporanraport', 'LaporanRaportController');
Route::resource('/nilaiextrakurikuler', 'NilaiExtrakurikulerController');
Route::resource('/nilaisikap', 'NilaiSikapController');
Route::resource('/absensi', 'AbsensiController');
Route::resource('/tahunajaran', 'TahunAjaranController');
Route::resource('/datanilai', 'DataNilaiController');
Route::resource('/gurukelas', 'GuruKelasController');
Route::resource('/kelassaya', 'KelasSayaController');
Route::get('/cetaktest', 'LaporanController@preview_laporan_test')->name('cetaktest');
// Route::get('/datanilai/list/{kelas}/{mapel}', ['uses' =>'DataNilaiController@list']);
Route::get('/datanilai/create/{kelas}/{mapel}', ['uses' =>'DataNilaiController@create']);

Route::get('/datanilai/list/{kelas}/{mapel}', ['as' => 'list_per_kelas_per_mapel', 'uses' => 'DataNilaiController@list']);
Route::get('/datanilai/{nilai}/{kelas}/{mapel}/edit', ['as' => 'edit_nilai', 'uses' => 'DataNilaiController@edit']);
});
