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
Route::get('/absensi', 'AbsensiController@index');
Route::get('/absensi/tambah','AbsensiController@create');
Route::post('/absensi','AbsensiController@store');
Route::get('/absensi/{id}/ubah','AbsensiController@edit');
Route::patch('/absensi/{id}','AbsensiController@update');
Route::delete('absensi/{id}','AbsensiController@destroy');

Route::get('/absensi/mengabsen',);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
