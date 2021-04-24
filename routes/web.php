<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('welcome', ['title' => 'Belajar Laravel 8 di YukCoding']);
});
Route::get('home', function() {
    return view('home');
});
Route::get('data-obat','App\Http\Controllers\ObatController@DataObat');

Route::get('data-obat/tambah','App\Http\Controllers\ObatController@TambahObat');

Route::post('data-obat', 'App\Http\Controllers\ObatController@ProsesTambah');
Route::get('data-obat/edit/{id}', 'App\Http\Controllers\ObatController@EditObat');

Route::patch('data-obat/{id}','App\Http\Controllers\ObatController@ProsesEdit');

Route::get('data-obat/hapus/{id}','App\Http\Controllers\ObatController@ProsesHapus');

Route::get('data-pasien','App\Http\Controllers\PasienController@DataPasien' );

Route::get('data-pasien/tambah','App\Http\Controllers\PasienController@TambahPasien');

Route::post('data-pasien','App\Http\Controllers\PasienController@ProsesTambah');

Route::get('data-pasien/edit/{id}','App\Http\Controllers\PasienController@EditPasien');

Route::patch('data-pasien/{id}','App\Http\Controllers\PasienController@ProsesEdit');

Route::get('data-pasien/hapus/{id}','App\Http\Controllers\PasienController@ProsesHapus');

Route::get('data-tindakan','App\Http\Controllers\TindakanController@DataTindakan');

Route::get('data-tindakan/tambah','App\Http\Controllers\TindakanController@TambahTindakan');

Route::post('data-tindakan','App\Http\Controllers\TindakanController@ProsesTambah');

Route::get('data-tindakan/edit/{id}','App\Http\Controllers\TindakanController@EditTindakan');

Route::patch('data-tindakan/{id}','App\Http\Controllers\TindakanController@ProsesEdit');

Route::get('data-tindakan/hapus/{id}','App\Http\Controllers\TindakanController@HapusTindakan');

Route::get('data-petugas','App\Http\Controllers\PetugasController@DataPetugas');

Route::get('data-petugas/tambah','App\Http\Controllers\PetugasController@TambahPetugas');

Route::post('data-petugas','App\Http\Controllers\PetugasController@ProsesTambah');

Route::get('data-petugas/edit/{id}','App\Http\Controllers\PetugasController@EditPetugas');

Route::patch('data-petugas/{id}','App\Http\Controllers\PetugasController@ProsesEdit');

Route::get('data-petugas/hapus/{id}','App\Http\Controllers\PetugasController@ProsesHapus');