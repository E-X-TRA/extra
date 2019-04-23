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
//untuk absen
Route::get('/absensi','AbsensiController@index');
Route::get('/absensi/rekapan', 'PertemuanController@index');
Route::get('/absensi/buatKumpul','PertemuanController@create');
Route::post('/absensi','PertemuanController@store');
//untuk anggota
Route::get('/anggota', 'AnggotaController@index');
Route::get('/anggota/tambah','AnggotaController@create');
Route::post('/anggota','AnggotaController@store');
Route::get('/anggota/{id}/ubah','AnggotaController@edit');
Route::patch('/anggota/{id}','AnggotaController@update');
Route::delete('/anggota/{id}','AnggotaController@destroy');
//untuk rekapan
Route::get('/absensi/rekapan/pertemuan/{id}','AbsensiController@indexRekapan');
Route::get('/absensi/mengabsen/', 'AbsensiController@indexAbsen');
Route::post('/absensi/mengabsen/', 'AbsensiController@storeAbsen');
//untuk uangkas
Route::get('/uangKas','KasController@index');
Route::get('/uangKas/catat','KasController@create');
Route::post('/uangKas','KasController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
