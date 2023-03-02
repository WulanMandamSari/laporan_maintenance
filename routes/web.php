<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
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

/*Route::get('', function () {
    return view('welcome');
}); */

Route::get('/clear-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    return 'DONE';
});

Route::resource('/welcome', 'WelcomeController');

// Route::get('/beranda', function () {
//   return view('beranda.index');
// });
// /* Form Barang */ 
// Route::resource('/barang', 'BarangController');
// Route::resource('/beranda', 'BerandaController');

/* Form Login */
Route::get('/login', function () {
    return view('login.index');
})->name('login')->middleware('guest');

// Route::get('postlogin', 'LoginController@postlogin')->name('postlogin');

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');

// Route::get('/beranda', 'BerandaController@index')->middleware('auth');

// Route::middleware(['auth'])->group(function () {
// });

//* Route Kerusakan *//
Route::group(['middleware' => ['auth','cekrole:admin,teknisi,karyawan']], function(){
     Route::get('/beranda', 'BerandaController@index')->name('beranda');
});

Route::group(['middleware' => ['auth','cekrole:teknisi']], function(){
    Route::get('/kerusakan_teknisi', 'KerusakanController@index_teknisi')->name('kerusakan_teknisi');
});

Route::get('/kerusakan', 'KerusakanController@index')->name('kerusakan')->middleware('auth');
// Route::get('/kerusakan_teknisi', 'KerusakanController@index_teknisi')->name('kerusakan_teknisi')->middleware('auth');
Route::get('/kerusakan/create', 'KerusakanController@create')->middleware('auth');
Route::post('/kerusakan/store', 'KerusakanController@store')->middleware('auth');
Route::get('/kerusakan/edit/{id_kerusakan}', 'KerusakanController@edit')->middleware('auth');
Route::put('/kerusakan/update/{id_kerusakan}', 'KerusakanController@update')->middleware('auth');
Route::get('/kerusakan/destroy/{id_kerusakan}', 'KerusakanController@destroy')->middleware('auth');
Route::get('/kerusakan/show/{id_kerusakan}', 'KerusakanController@show')->middleware('auth');
Route::get('/kerusakan/show_teknisi/{id_kerusakan}', 'KerusakanController@show')->middleware('auth');
Route::get('cetak-kerusakan', 'KerusakanController@cetakkerusakan')->name('cetak-kerusakan')->middleware('auth');
Route::get('/cetak-data-kerusakan-pertanggal', 'KerusakanController@cetakkerusakanpertanggal')->name('cetak-data-kerusakan-pertanggal')->middleware('auth');
Route::get('/Kerusakan/cetakpertanggal/{tglawal}/{tglakhir}', 'KerusakanController@cetakpertanggall')->name('cetakpertanggal')->middleware('auth');

//* Route Penyelesaian *//
Route::get('/penyelesaian', 'PenyelesaianController@index')->name('penyelesaian')->middleware('auth');
Route::get('/penyelesaian_teknisi', 'PenyelesaianController@index_teknisi')->name('penyelesaian_teknisi')->middleware('auth');
Route::get('/penyelesaian/create', 'PenyelesaianController@create')->middleware('auth');
Route::post('/penyelesaian/store', 'PenyelesaianController@store')->middleware('auth');
Route::get('/penyelesaian/edit/{id_penyelesaian}', 'PenyelesaianController@edit')->middleware('auth');
Route::put('/penyelesaian/update/{id_penyelesaian}', 'PenyelesaianController@update')->middleware('auth');
Route::get('/penyelesaian/destroy/{id_penyelesaian}', 'PenyelesaianController@destroy')->middleware('auth');
Route::get('/penyelesaian/show/{id_penyelesaian}', 'PenyelesaianController@show')->middleware('auth');
Route::get('/cetak-penyelesaian', 'PenyelesaianController@cetakpenyelesaian')->name('cetak-penyelesaian')->middleware('auth');
Route::get('/cetak-data-penyelesaian-pertanggal', 'PenyelesaianController@cetakpenyelesaianpertanggal')->name('cetak-data-penyelesaian-pertanggal')->middleware('auth');
Route::get('/cetakpertanggal/{tglawal}/{tglakhir}', 'PenyelesaianController@cetakpertanggal')->name('cetakpertanggal')->middleware('auth');
Route::get('/api/fetch-barang', 'PenyelesaianController@fetchname');

//* Form Lokasi *//
Route::get('/lokasi', 'LokasiController@index')->name('lokasi')->middleware('auth');
Route::get('/lokasi/create', 'LokasiController@create')->middleware('auth');
Route::post('/lokasi/store', 'LokasiController@store')->middleware('auth');
Route::get('/lokasi/edit/{id}', 'LokasiController@edit')->middleware('auth');
Route::put('/lokasi/update/{id}', 'LokasiController@update')->middleware('auth');
Route::get('/lokasi/destroy/{id}', 'LokasiController@destroy')->middleware('auth');
Route::get('/lokasi/show/{id}', 'LokasiController@show')->middleware('auth');

/* Form Barang */ 
Route::get('/barang', 'BarangController@index')->name('barang')->middleware('auth');
Route::get('/barang/create', 'BarangController@create')->middleware('auth');
Route::post('/barang/store', 'BarangController@store')->middleware('auth');
Route::get('/barang/edit/{id_barang}', 'BarangController@edit')->middleware('auth');
Route::put('/barang/update/{id_barang}', 'BarangController@update')->middleware('auth');
Route::get('/barang/destroy/{id_barang}', 'BarangController@destroy')->middleware('auth');
Route::get('/barang/show/{id_barang}', 'BarangController@show')->middleware('auth');

//* Form Pengaduan *//
Route::get('/pengaduan', 'PengaduanController@index')->name('pengaduan')->middleware('auth');
Route::get('/pengaduan_admin', 'PengaduanController@index_admin')->name('pengaduan_admin')->middleware('auth');
Route::get('/pengaduan/create', 'PengaduanController@create')->middleware('auth');
Route::post('/pengaduan/store', 'PengaduanController@store')->middleware('auth');
Route::get('/pengaduan/edit/{id}', 'PengaduanController@edit')->middleware('auth');
Route::put('/pengaduan/update/{id}', 'PengaduanController@update')->middleware('auth');
Route::get('/pengaduan/destroy/{id}', 'PengaduanController@destroy')->middleware('auth');
Route::get('/pengaduan/show/{id}', 'PengaduanController@show')->middleware('auth');

/* Dropdown */ 
Route::get('dropdown', [DropdownController::class, 'index']);
Route::post('api/fetch-kerusakan', [DropdownController::class, 'fetchkerusakan']);
Route::post('api/fetch-penyelesaian', [DropdownController::class, 'fetchpenyelesaian']);
// Route::get('/upload', 'KerusakanController@upload');
// Route::post('/upload/proses', 'KerusakanController@proses_upload');
