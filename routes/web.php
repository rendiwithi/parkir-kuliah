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
    return view('welcome');
});
Route::get('user', 'App\Http\Controllers\akunController@akun');
Route::get('user/tambah', 'App\Http\Controllers\userController@tambah')->name('tambah');
Route::get('user/add_user', 'App\Http\Controllers\userController@add_user')->name('add_user');
Route::get('user/delete/{id}','App\Http\Controllers\userController@delete')->name('delete');
Route::get('user/edit/{id}','App\Http\Controllers\userController@edit_user')->name('edit_user');
Route::get('user/update','App\Http\Controllers\userController@edit_user_aksi')->name('edit_user_aksi');
  