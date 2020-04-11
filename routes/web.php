<?php

use Illuminate\Support\Facades\Route;

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
    return view('landing');
});

Route::get('/beranda', function() {
    return view('petugas.beranda');
});

Route::get('/penggunaan', function() {
    return view('use');
});

Route::get('/tentang', function() {
    return view('tentang');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('pengguna','PenggunaController');
Route::resource('/pengguna/{id}/delete','PenggunaController@destroy');
Route::resource('users','PenggunaUserController');
Route::resource('/users/{id}/delete','PenggunaUserController@destroy');
Route::resource('pengaduan','PengaduanController');
Route::resource('pengaduansaya','PengaduanUserController');
Route::resource('lapor','PengaduanUserCont  roller');
Route::resource('jenis','JenisController');
Route::get('/jenis/{id}/delete', 'JenisController@destroy');
Route::resource('kategori','KategoriController');
Route::get('/kategori/{id}/delete', 'KategoriController@destroy');
Route::resource('petugas','PetugasController');
Route::get('/petugas/{id}/delete', 'PetugasController@destroy');
Route::resource('asal','AsalController');
Route::get('/asal/{id}/delete', 'AsalController@destroy');
Route::resource('masyarakat','MasyarakatController');
Route::get('/masyarakat/{id}/delete', 'MasyarakatController@destroy');
Route::get('pengaduanPdf','PengaduanController@cetakPdf');
Route::get('pengaduanExcel','PengaduanController@cetakExcel');
Route::get('masyarakatPdf','MasyarakatController@cetakPdf');
Route::get('masyarakatExcel','MasyarakatController@cetakExcel');
Route::get('kategoriPdf','KategoriController@cetakPdf');
Route::get('kategoriExcel','KategoriController@cetakExcel');

