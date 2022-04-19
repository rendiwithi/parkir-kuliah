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

// Route::get('/', function () {
//     return view('welcome');
// });
// General
Route::get('/', 'App\Http\Controllers\generalController@userView');
Route::get('search','App\Http\Controllers\generalController@user_search')->name('user_search');
Route::get('login', 'App\Http\Controllers\generalController@loginView');
Route::get('login/logic', 'App\Http\Controllers\generalController@login')->name('login');
// admin masuk
Route::get('admin/masuk', 'App\Http\Controllers\generalController@admin_masuk');
Route::get('admin/masuk/tambah', 'App\Http\Controllers\generalController@tambah')->name('tambah');
Route::get('admin/masuk/add_kendaraan', 'App\Http\Controllers\generalController@add_kendaraan')->name('add_kendaraan');

//admin lapangan
Route::get('admin/lapangan', 'App\Http\Controllers\generalController@admin_lapangan');
Route::get('admin/lapangan/edit/{id}','App\Http\Controllers\generalController@edit_kendaraan')->name('edit_kendaraan');
Route::get('admin/lapangan/update','App\Http\Controllers\generalController@edit_kendaraan_aksi')->name('edit_kendaraan_aksi');

//admin keluar
Route::get('admin/keluar', 'App\Http\Controllers\generalController@admin_keluar');
Route::get('admin/keluar/delete/{id}/{tempat}','App\Http\Controllers\generalController@delete')->name('delete');

// Pegawai
Route::get('pegawai', 'App\Http\Controllers\akunController@akun');
Route::get('pegawai/tambah', 'App\Http\Controllers\akunController@tambah')->name('tambah');
Route::get('pegawai/add_akun', 'App\Http\Controllers\akunController@add_akun')->name('add_akun');
Route::get('pegawai/delete/{id}','App\Http\Controllers\userController@delete')->name('delete');
Route::get('pegawai/edit/{id}','App\Http\Controllers\akunController@edit_akun')->name('edit_akun');
Route::get('pegawai/update','App\Http\Controllers\akunController@edit_akun_aksi')->name('edit_akun_aksi');

// Route::get('parkir', 'App\Http\Controllers\parkirController@parkir');
Route::get('parkir', 'App\Http\Controllers\parkirController@parkir');
Route::get('parkir/tambah', 'App\Http\Controllers\parkirController@tambah')->name('tambah');
Route::get('parkir/add_kendaraan', 'App\Http\Controllers\parkirController@add_kendaraan')->name('add_kendaraan');
Route::get('parkir/edit/{id}','App\Http\Controllers\parkirController@edit_detail_parkir')->name('edit_parkir');
Route::get('parkir/update','App\Http\Controllers\parkirController@edit_parkir_aksi')->name('edit_parkir_aksi');
Route::get('parkir/delete/{id}/{tempat}','App\Http\Controllers\parkirController@delete')->name('delete');

// Route::get('user/tambah', 'App\Http\Controllers\userController@tambah')->name('tambah');
// Route::get('user/add_user', 'App\Http\Controllers\userController@add_user')->name('add_user');
// Route::get('user/delete/{id}','App\Http\Controllers\userController@delete')->name('delete');
// Route::get('user/edit/{id}','App\Http\Controllers\userController@edit_user')->name('edit_user');
// Route::get('user/update','App\Http\Controllers\userController@edit_user_aksi')->name('edit_user_aksi');
