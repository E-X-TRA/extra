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

Route::get('/absensi','AbsensiController@index');
Route::get('/absensi/rekapan', 'PertemuanController@index');
Route::get('/absensi/buatKumpul','PertemuanController@create');
Route::post('/absensi','PertemuanController@store');


Route::get('/absensi/anggota', 'AnggotaController@index');
Route::get('/absensi/anggota/tambah','AnggotaController@create');
Route::post('/absensi/anggota','AnggotaController@store');
Route::get('/absensi/anggota/{id}/ubah','AnggotaController@edit');
Route::patch('/absensi/anggota/{id}','AnggotaController@update');
Route::delete('absensi/anggota/{id}','AnggotaController@destroy');

Route::get('/absensi/rekapan/pertemuan/{id}','AbsensiController@indexRekapan');
Route::get('/absensi/mengabsen/', 'AbsensiController@indexAbsen');
Route::post('/absensi/mengabsen/', 'AbsensiController@storeAbsen');

Route::get('/uangKas','KasController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
