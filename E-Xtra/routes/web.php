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
Route::get('/absensi', 'AnggotaController@index');
Route::get('/absensi/tambah','AnggotaController@create');
Route::post('/absensi','AnggotaController@store');
Route::get('/absensi/{id}/ubah','AnggotaController@edit');
Route::patch('/absensi/{id}','AnggotaController@update');
Route::delete('absensi/{id}','AnggotaController@destroy');

Route::get('/absensi/mengabsen','AbsensiController@index');
Route::get('/absensi/mengabsen/mulai', 'AbsensiController@indexAbsen');
Route::post('/absensi/mengabsen/', 'AbsensiController@storeAbsen');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
