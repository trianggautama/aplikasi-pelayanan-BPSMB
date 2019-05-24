<?php


Route::get('/', function () {
    return view('welcome');
});

//MIDLEWARE ADMIN
Route::group(['middleware' => 'admin'], function() {
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


//Permohonan Kalibrasi
Route::get('/permohonan_kalibrasi','adminController@permohonan_kalibrasi_index')->name('permohonan_kalibrasi_index');
Route::get('/permohonan_kalibrasi_edit','adminController@permohonan_kalibrasi_edit')->name('permohonan_kalibrasi_edit');

//Permohonan pengujian
Route::get('/permohonan_pengujian','adminController@permohonan_pengujian_index')->name('permohonan_pengujian_index');
Route::get('/permohonan_pengujian_edit','adminController@permohonan_pengujian_edit')->name('permohonan_pengujian_edit');

//MIDLEWARE ADMIN
});
//-------------------------------------------------------------------------------------------------------------------------------//

//MIDLEWARE USER

//dashboard user
Route::get('/user','userController@index')->name('user_index');

//permohonan kalibrasi user
Route::get('/permohonan_kalibrasi_user','userController@permohonan_kalibrasi')->name('permohonan_kalibasri_user_index');
Route::get('/permohonan_kalibrasi_tambah','userController@permohonan_kalibrasi_tambah')->name('permohonan_kalibrasi_user_tambah');
Route::get('/permohonan_kalibrasi_edit','userController@permohonan_kalibrasi_edit')->name('permohonan_kalibrasi_user_edit');

//permohonan pengujian user
Route::get('/permohonan_pengujian_user','userController@permohonan_pengujian')->name('permohonan_pengujian_user_index');
Route::get('/permohonan_pengujian_tambah','userController@permohonan_pengujian_tambah')->name('permohonan_pengujian_user_tambah');
Route::get('/permohonan_pengujian_edit','userController@permohonan_pengujian_edit')->name('permohonan_pengujian_user_edit');


//MIDLEWARE USER



Auth::routes();

Route::get('/home', 'dashboardController@index')->name('home');
