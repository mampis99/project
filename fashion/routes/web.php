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

Route::get('/admin',function (){
  return view('master/admin');
});
//Route::get('/{id}', function ($id) {
//    $jum = $id*2;
//    return $jum;
//});
Route::get('/paket/pilih/{pkt}', function ($pkt) {
    return $pkt;
});

Route::get('/pendaftaransiswa','PendaftaransiswaController@index');
Route::post('/simpan','PendaftaransiswaController@simpan');

Route::get('/login','LoginController@index');
Route::post('/postLogin','LoginController@postLogin');
Route::get('/logout','LoginController@logout');

Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/profil', 'SiswaController@profil');
Route::get('/siswa/paket', 'SiswaController@pilih_paket');

Route::post('/siswa/paket/cari', 'SiswaController@cari_kelas');
Route::get('/siswa/paket/id={kode_kelas}', 'SiswaController@paket_detail');
Route::post('/siswa/paket/id={pkt}', 'SiswaController@ambil_paket');

Route::get('/siswa/absensi', 'SiswaController@absensi_siswa');
Route::get('/siswa/jadwal', 'SiswaController@jadwal');
Route::get('/siswa/nilai', 'SiswaController@nilai_siswa');
Route::get('/siswa/testimoni', 'SiswaController@testimoni');
Route::post('/siswa/save_testimoni', 'SiswaController@save_testimoni');


//Route::get('/admin', function () {
//  return 'halaman admin';
//});

Route::get('/dosen', function () {
  return 'halaman dosen';
});

Route::get('/siswanaktif', function () {
    return view('siswanaktif');
});
