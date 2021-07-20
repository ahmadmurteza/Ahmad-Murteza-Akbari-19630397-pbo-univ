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


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Makul
Route::get('makul', "App\Http\Controllers\MakulController@index")->name('makul');
Route::get('makul-create', "App\Http\Controllers\MakulController@create")->name('tambah.makul');
Route::post('makul-simpan', "App\Http\Controllers\MakulController@store")->name('simpan.makul');    

Route::get('makul-edit/{id}', "App\Http\Controllers\MakulController@edit")->name('edit.makul');    
Route::post('makul-update/{id}', "App\Http\Controllers\MakulController@update")->name('update.makul');    
Route::get('makul-delete/{id}', "App\Http\Controllers\MakulController@destroy")->name('hapus.makul');

// Route Mahasiswa
Route::get('mahasiswa', "App\Http\Controllers\MahasiswaController@index")->name('mahasiswa');
Route::get('mahasiswa-create', "App\Http\Controllers\MahasiswaController@create")->name('tambah.mahasiswa');
Route::post('mahasiswa-simpan', "App\Http\Controllers\MahasiswaController@store")->name('simpan.mahasiswa');   

Route::get('mahasiswa-edit/{id}', "App\Http\Controllers\MahasiswaController@edit")->name('edit.mahasiswa');    

Route::get('mahasiswa-delete/{id}', "App\Http\Controllers\MahasiswaController@destroy")->name('hapus.mahasiswa');