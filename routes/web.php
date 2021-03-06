<?php


// Route::get('/', function () {
//     return view('welcome');
// });

//MIDLEWARE ADMIN
Auth::routes(['verify' => true]);
Route::group(['middleware' => 'admin'], function() {
Route::get('/admin','adminController@index')
->name('admin_index');

//perusahaan
Route::get('/admin/perusahaan','adminController@perusahaan_index')
->name('admin_perusahaan_index');
Route::get('/admin/perusahaan/riwayat','adminController@riwayat_perusahaan_index')
->name('admin_riwayat_perusahaan_index');
Route::put('/admin/perusahaan/{id}', 'adminController@status_update')
->name('status_update');
Route::get('/admin/perusahaan/tambah','adminController@perusahaan_tambah')
->name('admin_perusahaan_tambah');
Route::post('/admin/perusahaan/tambah','adminController@perusahaan_tambah_store')
->name('perusahaan_tambah_store');
Route::get('/admin/perusahaan/detail/{id}','adminController@perusahaan_detail')
->name('admin_perusahaan_detail');
Route::put('/admin/perusahaan/detail/{id}','adminController@perusahaan_update')
->name('admin_perusahaan_update');


//Retribusi Kalibrasi
Route::get('/retribusi-kalibrasi','adminController@retribusi_kalibrasi_index')
->name('retribusi_kalibrasi_index');
Route::POST('/retribusi-kalibrasi','adminController@retribusi_kalibrasi_store')
->name('retribusi_kalibrasi_store');
Route::get('/retribusi-kalibrasi/edit/{id}','adminController@retribusi_kalibrasi_edit')
->name('retribusi_kalibrasi_edit');
Route::put('/retribusi-kalibrasi/edit/{id}','adminController@retribusi_kalibrasi_update')
->name('retribusi_kalibrasi_update');
Route::get('/retribusi-kalibrasi/hapus/{id}','adminController@retribusi_kalibrasi_hapus')
->name('retribusi_kalibrasi_hapus');

//Retribusi Pengujian
Route::get('/retribusi-pengujian','adminController@retribusi_pengujian_index')
->name('retribusi_pengujian_index');
Route::POST('/retribusi-pengujian','adminController@retribusi_pengujian_store')
->name('retribusi_pengujian_store');
Route::get('/retribusi-pengujian/edit/{id}','adminController@retribusi_pengujian_edit')
->name('retribusi_pengujian_edit');
Route::put('/retribusi-pengujian/edit/{id}','adminController@retribusi_pengujian_update')
->name('retribusi_pengujian_update');
Route::get('/retribusi-pengujian/hapus/{id}','adminController@retribusi_pengujian_hapus')
->name('retribusi_pengujian_hapus');

//Permohonan Kalibrasi
Route::get('/permohonan_kalibrasi','adminController@permohonan_kalibrasi_index')
->name('permohonan_kalibrasi_index');
//laporan bulan
Route::get('/permohonan_kalibrasi/filter/bulan','adminController@permohonan_kalibrasi_filter_bulan')
->name('permohonan_kalibrasi_filter_bulan');
Route::post('/permohonan_kalibrasi/filter/bulan','adminController@laporan_kalibrasi_filter_bulan')
->name('laporan_kalibrasi_filter_bulan');
//laporan tahun
Route::get('/permohonan_kalibrasi/filter/tahun','adminController@permohonan_kalibrasi_filter_tahun')
->name('permohonan_kalibrasi_filter_tahun');
Route::post('/permohonan_kalibrasi/filter/tahun','adminController@laporan_kalibrasi_filter_tahun')
->name('laporan_kalibrasi_filter_tahun');
//laporan status
Route::get('/permohonan_kalibrasi/filter/status','adminController@permohonan_kalibrasi_filter_status')
->name('permohonan_kalibrasi_filter_status');
Route::post('/permohonan_kalibrasi/filter/status','adminController@laporan_kalibrasi_filter_status')
->name('laporan_kalibrasi_filter_status');
Route::get('/permohonan_kalibrasi_edit','adminController@permohonan_kalibrasi_edit')
->name('permohonan_kalibrasi_edit');
Route::get('/halaman_verifikasi_kalibrasi/{id}','adminController@halaman_verifikasi_kalibrasi')
->name('halaman_verifikasi_kalibrasi');
Route::put('/halaman_verifikasi_kalibrasi/{id}','adminController@halaman_verifikasi_kalibrasi_store')
->name('halaman_verifikasi_kalibrasi_store');
Route::get('/permohonan-kalibrasi/hapus/{id}','adminController@permohonan_kalibrasi_hapus')
->name('permohonan_kalibrasi_hapus');
Route::get('/permohonan_kalibrasi/cetak','adminController@permohonan_kalibrasi_cetak')
->name('permohonan_kalibrasi_cetak');

//Permohonan pengujian
Route::get('/permohonan_pengujian','adminController@permohonan_pengujian_index')
->name('permohonan_pengujian_index');
Route::get('/permohonan_pengujian/filter/bulan','adminController@permohonan_pengujian_filter_bulan')
->name('permohonan_pengujian_filter_bulan');
Route::post('/permohonan_pengujian/filter/bulan','adminController@laporan_pengujian_filter_bulan')
->name('laporan_pengujian_filter_bulan');
//laporan tahun
Route::get('/permohonan_pengujian/filter/tahun','adminController@permohonan_pengujian_filter_tahun')
->name('permohonan_pengujian_filter_tahun');
Route::post('/permohonan_pengujian/filter/tahun','adminController@laporan_pengujian_filter_tahun')
->name('laporan_pengujian_filter_tahun');
//laporan status
Route::get('/permohonan_pengujian/filter/status','adminController@permohonan_pengujian_filter_status')
->name('permohonan_pengujian_filter_status');
Route::post('/permohonan_pengujian/filter/status','adminController@laporan_pengujian_filter_status')
->name('laporan_pengujian_filter_status');
Route::get('/permohonan_pengujian_edit','adminController@permohonan_pengujian_edit')
->name('permohonan_pengujian_edit');
Route::get('/halaman_verifikasi/{id}','adminController@halaman_verifikasi')
->name('halaman_verifikasi');
Route::put('/halaman_verifikasi/{id}','adminController@halaman_verifikasi_store')
->name('halaman_verifikasi_store');
Route::get('/permohonan-pengujian/hapus/{id}','adminController@permohonan_pengujian_hapus')
->name('permohonan_pengujian_hapus');
Route::get('/permohonan_perngujian/cetak','adminController@permohonan_pengujian_cetak')
->name('permohonan_pengujian_cetak');

//Data Kalibrasi
Route::get('/kalibrasi','adminController@kalibrasi_index')
->name('kalibrasi_index');
Route::get('/kalibrasi_detail/{id}','adminController@kalibrasi_detail')
->name('kalibrasi_detail');
Route::get('/kalibrasi_edit/{id}','adminController@kalibrasi_edit')
->name('kalibrasi_edit');
Route::put('/kalibrasi_edit/{id}','adminController@kalibrasi_update')
->name('kalibrasi_update');
Route::get('/kalibrasi/sertifikat/{id}','adminController@kalibrasi_sertifikat_edit')
->name('kalibrasi_sertifikat_edit');
Route::put('/kalibrasi/sertifikat/{id}','adminController@kalibrasi_sertifikat_update')
->name('kalibrasi_sertifikat_update');
Route::get('/cetak/sertifikat_kalibrasi/{id}','adminController@sertifikat_kalibrasi')
->name('sertifikat_kalibrasi');
Route::get('/hasil_kalibrasi/tambah/{id}','adminController@hasil_kalibrasi_tambah')
->name('hasil_kalibrasi_tambah');
Route::put('/hasil_kalibrasi/tambah/{id}','adminController@hasil_kalibrasi_store')
->name('hasil_kalibrasi_store');
Route::get('/kalibrasi/cetak','adminController@kalibrasi_cetak')
->name('kalibrasi_cetak');
Route::get('/kalibrasi/perusahaan/cetak/{id}','adminController@kalibrasi_perusahaan_cetak')
->name('kalibrasi_perusahaan_cetak');
Route::get('/kalibrasi_detail/hapus/{id}','adminController@kalibrasi_hapus')
->name('kalibrasi_hapus');

Route::get('/kalibrasi/filter/bulan','adminController@kalibrasi_filter_bulan')
->name('kalibrasi_filter_bulan');
Route::post('/kalibrasi/filter/bulan','adminController@laporan_kalibrasi_filter_bulan_tahun')
->name('laporan_kalibrasi_filter_bulan_tahun');

//Data Pengujian
Route::get('/pengujian','adminController@pengujian_index')
->name('pengujian_index');
Route::get('/pengujian_detail/{id}','adminController@pengujian_detail')
->name('pengujian_detail');
Route::get('/pengujian_edit/{id}','adminController@pengujian_edit')
->name('pengujian_edit');
Route::put('/pengujian_edit/{id}','adminController@pengujian_update')
->name('pengujian_update');
Route::get('/pengujian/sertifikat/{id}','adminController@pengujian_sertifikat_edit')
->name('pengujian_sertifikat_edit');
Route::put('/pengujian/sertifikat/{id}','adminController@pengujian_sertifikat_update')
->name('pengujian_sertifikat_update');
Route::get('/cetak/sertifikat_pengujian/{id}','adminController@sertifikat_pengujian')
->name('sertifikat_pengujian');
Route::get('/hasil_pengujian/tambah/{id}','adminController@hasil_pengujian_tambah')
->name('hasil_pengujian_tambah');
Route::put('/hasil_pengujian/tambah/{id}','adminController@hasil_pengujian_store')
->name('hasil_pengujian_store');
Route::get('/pengujian/cetak','adminController@pengujian_cetak')
->name('pengujian_cetak');
Route::get('/pengujian/perusahaan/cetak/{id}','adminController@pengujian_perusahaan_cetak')
->name('pengujian_perusahaan_cetak');
Route::get('/pengujian_detail/hapus/{id}','adminController@pengujian_hapus')
->name('pengujian_hapus');

Route::get('/pengujian/filter/bulan','adminController@pengujian_filter_bulan')
->name('pengujian_filter_bulan');
Route::post('/pengujian/filter/bulan','adminController@laporan_pengujian_filter_bulan_tahun')
->name('laporan_pengujian_filter_bulan_tahun');


//user atau admin
Route::get('/admin/user','adminController@user_index')
->name('admin_user_index');
Route::POST('/admin/user','adminController@user_store')
->name('admin_user_store');
Route::get('/admin/user/edit/{id}','adminController@user_edit')
->name('admin_user_edit');
Route::put('/admin/user/edit/{id}','adminController@user_update')
->name('admin_user_update');
Route::get('/admin/user/hapus/{id}','adminController@user_hapus')
->name('admin_user_hapus');

// laporan nota kalibrasi
Route::get('/nota_permohonan_kalibrasi/{id}','adminController@nota_permohonan_kalibrasi')
->name('nota_permohonan_kalibrasi');
// laporan nota pengujian
Route::get('/nota_permohonan_pengujian/{id}','adminController@nota_permohonan_pengujian')
->name('nota_permohonan_pengujian');

//laporan perusahaan keseluruhan
Route::get('/admin/perusahaan/laporan/perusahaan-keseluruhan','adminController@laporan_perusahaan_keseluruhan')
->name('laporan_perusahaan_keseluruhan');

// laporan perusahaan filter status
Route::get('/admin/perusahaan/laporan/perusahaan-filter-status','adminController@laporan_perusahaan_filter_status')
->name('laporan_perusahaan_filter_status');
Route::post('/admin/perusahaan/laporan/perusahaan-filter-status','adminController@laporan_perusahaan_status')
->name('laporan_filter_status');

//laporan retribusi kalibrasi
Route::get('/admin/retribusi-kalibrasi/laporan/retribusi-kalibrasi','adminController@laporan_retribusi_kalibrasi')
->name('laporan_retribusi_kalibrasi');

//laporan retribusi pengujian
Route::get('/admin/retribusi_pengujian/laporan/retribusi-pengujian','adminController@laporan_retribusi_pengujian')
->name('laporan_retribusi_pengujian');

//laporan
Route::get('/admin/laboratorium/laporan','adminController@laporan_laboratorium')
->name('laporan_laboratorium');

Route::get('/admin/pendapatan/','adminController@pendapatan_index')
->name('pendapatan_index');
Route::get('/admin/pendapatan/laporan','adminController@pendapatan_cetak')
->name('pendapatan_cetak');

//laboratorium
Route::get('/admin/laboratorium','adminController@laboratorium_index')
->name('laboratorium_index');
Route::POST('/admin/laboratorium','adminController@laboratorium_store')
->name('laboratorium_store');
Route::get('/admin/laboratorium/edit/{id}','adminController@laboratorium_edit')
->name('laboratorium_edit');
Route::put('/admin/laboratorium/edit/{id}','adminController@laboratorium_update')
->name('laboratorium_update');
Route::get('/admin/laboratorium/hapus/{id}','adminController@laboratorium_hapus')
->name('laboratorium_hapus');

//MIDLEWARE ADMIN
});
//-------------------------------------------------------------------------------------------------------------------------------//

//MIDLEWARE USER

//dashboard user
Route::get('/user','userController@index')
->name('user_index');
Route::get('/user/edit/{id}','userController@user_edit')
->name('user_edit');
Route::put('/user/edit/{id}','userController@user_update')
->name('user_update');

Route::get('/inbox','userController@inbox')
->name('inbox');
Route::get('/inbox/{id}','userController@show_message')
->name('show_message');

Route::get('/perusahaan/tambah','userController@perusahaan_tambah')
->name('perusahaan_tambah');
Route::post('/perusahaan/tambah','userController@perusahaan_tambah_store')
->name('perusahaan_tambah_store');
Route::get('/perusahaan/detail/{id}','userController@perusahaan_detail')
->name('perusahaan_detail');
Route::put('/perusahaan/detail/{id}','userController@perusahaan_update')
->name('perusahaan_update');

//permohonan kalibrasi user
Route::get('/permohonan-kalibrasi-user','userController@permohonan_kalibrasi_index')
->name('permohonan_kalibrasi_user_index');
Route::get('/permohonan-kalibrasi-tambah','userController@permohonan_kalibrasi_tambah')
->name('permohonan_kalibrasi_user_tambah');
Route::POST('/permohonan-kalibrasi-tambah','userController@permohonan_kalibrasi_store')
->name('permohonan_kalibrasi_store');
Route::get('/permohonan_kalibrasi_edit/{id}','userController@permohonan_kalibrasi_edit')
->name('permohonan_kalibrasi_user_edit');
Route::put('/permohonan_kalibrasi_edit/{id}','userController@permohonan_kalibrasi_update')
->name('permohonan_kalibrasi_user_update');

Route::get('/permohonan-pengujian-user','userController@permohonan_pengujian_index')
->name('permohonan_pengujian_user_index');
Route::get('/permohonan-pengujian-tambah','userController@permohonan_pengujian_tambah')
->name('permohonan_pengujian_user_tambah');
Route::POST('/permohonan-pengujian-tambah','userController@permohonan_pengujian_store')
->name('permohonan_pengujian_store');
Route::get('/permohonan_pengujian_edit/{id}','userController@permohonan_pengujian_edit')
->name('permohonan_pengujian_user_edit');
Route::put('/permohonan_pengujian_edit/{id}','userController@permohonan_pengujian_update')
->name('permohonan_pengujian_user_update');



//riwayat Kalibrasi
Route::get('/user/kalibrasi','userController@kalibrasi_index')
->name('kalibrasi_user_index');
Route::get('/user/cetak/sertifikat_kalibrasi/{id}','userController@sertifikat_kalibrasi')
->name('sertifikat_kalibrasi_user');
Route::get('/user/kalibrasi/download/sertifikat_kalibrasi/{id}','userController@download_sertifikat_kalibrasi')
->name('download_sertifikat_kalibrasi');

//riwayat pengujian
Route::get('/user/pengujian','userController@pengujian_index')
->name('pengujian_user_index');
Route::get('/user/cetak/sertifikat_pengujian/{id}','userController@sertifikat_pengujian')
->name('sertifikat_pengujian_user');
Route::get('/user/pengujian/download/sertifikat_pengujian/{id}','userController@download_sertifikat_pengujian')
->name('download_sertifikat_pengujian');

//MIDLEWARE USER


Route::get('/', 'welcomeController@index')
->name('index');

Auth::routes();

Route::get('/home', 'dashboardController@index')
->name('home');
