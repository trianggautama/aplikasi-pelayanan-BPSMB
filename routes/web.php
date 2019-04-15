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


//Retribusi Kalibrasi
Route::get('/retribusi_kalibrasi','adminController@retribusi_kalibrasi_index')->name('retribusi_kalibrasi_index');


