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

Route::get('/home', 'HomeController@index')->name('home');

//mahasiswa
Route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
//create
Route::get('mahasiswa-create', 'MahasiswaController@create')->name('mahasiswa-create');
Route::post('mahasiswa-simpan', 'MahasiswaController@store')->name('mahasiswa-simpan');
//edit
Route::get('mahsiswa-edit/{id}', 'MahasiswaController@edit')->name('mahasiswa-edit');
Route::post('mahasiswa-update/{id}', 'MahasiswaController@update')->name('mahasiswa-update');
//hapus
Route::get('mahasiswa-hapus/{id}', 'MahasiswaController@destroy')->name('mahasiswa-hapus');


//Makul
Route::get('makul', 'MakulController@index')->name('makul');
Route::get('makul-create', 'MakulController@create')->name('makul-create');
Route::post('makul-simpan', 'MakulController@store')->name('makul-simpan');
//edit
Route::get('makul-edit/{id}', 'MakulController@edit')->name('makul-edit');
Route::post('makul-update/{id}', 'MakulController@update')->name('makul-update');
//hapus
Route::get('makul-hapus/{id}', 'MakulController@destroy')->name('makul-hapus');


//nilai
Route::get('nilai', 'NilaiController@index')->name('nilai');
//create
Route::get('nilai-create', 'NilaiController@create')->name('nilai-create');
Route::post('nilai-simpan', 'NilaiController@store')->name('nilai-simpan');
//edit
Route::get('nilai-edit/{id}', 'NilaiController@edit')->name('nilai-edit');
Route::post('nilai-update/{id}', 'NilaiController@update')->name('nilai-update');
//hapus
Route::get('nilai-hapus/{id}', 'NilaiController@destroy')->name('nilai-hapus');