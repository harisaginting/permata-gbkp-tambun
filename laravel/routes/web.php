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
 
Auth::routes();

Route::get('/app', 'DashboardController@index')->name('app');

Route::get('app/anggota', 'AnggotaController@index');
Route::get('app/anggota/detail/{id}', 'AnggotaController@detail');
Route::post('app/datatable_anggota', 'AnggotaController@datatable_anggota');


Route::get('app/anggota/upload', 'AnggotaController@upload_anggota');
Route::post('app/anggota/upload_data_anggota', 'AnggotaController@upload_anggota_process')->name('upload_data_anggota');

Route::get('app/keuangan', 'KeuanganController@index');
Route::post('app/datatable_pemasukan_kas', 'KeuanganController@datatable_pemasukan_kas');