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

Route::get('/admin','adminController@index')->name('admin_index');

//perusahaan
Route::get('/perusahaan','adminController@perusahaan_index')->name('perusahaan_index');
Route::get('/perusahaan_detail','adminController@perusahaan_detail')->name('perusahaan_detail');


//Retribusi Kalibrasi
Route::get('/retribusi_kalibrasi','adminController@retribusi_kalibrasi_index')->name('retribusi_kalibrasi_index');
Route::get('/retribusi_kalibrasi_edit','adminController@retribusi_kalibrasi_edit')->name('retribusi_kalibrasi_edit');

//Retribusi Pengujian
Route::get('/retribusi_pengujian','adminController@retribusi_pengujian_index')->name('retribusi_pengujian_index');
Route::get('/retribusi_pengujian_edit','adminController@retribusi_pengujian_edit')->name('retribusi_pengujian_edit');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
