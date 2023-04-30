<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/home',[HomeController::class,'hometampil'])->name('home');
//Route untuk Data Buku
// Route::get('/buku', 'BukuController@bukutampil');
// Route::post('/buku/tambah','BukuController@bukutambah');
// Route::get('/buku/hapus/{idbuku}','BukuController@bukuhapus');
// Route::put('/buku/edit/{idbuku}', 'BukuController@bukuedit');

//route buku
Route::get('/buku',[BukuController::class, 'bukutampil'])->name('buku');
Route::post('/buku/tambah',[BukuController::class, 'bukutambah'])->name('buku');
Route::get('/buku/hapus/{id_buku}',[BukuController::class, 'bukuhapus'])->name('buku');
Route::put('/buku/edit/{idbuku}', [BukuController::class, 'bukuedit'])->name('buku');

//Route untuk Data Siswa
Route::get('/siswa', 'SiswaController@bukutampil');

//Route untuk Data Petugas
Route::get('/petugas', 'PetugasController@bukutampil');

//Route untuk Data Peminjaman
// Route::get('/pinjam', 'PinjamController@pinjamtampil');
// Route::get('/pinjam/hapus/{idpinjam}','PinjamController@pinjamhapus');
Route::get('/pinjam',[PinjamController::class,'pinjamtampil'])->name('pinjam');
Route::post('/pinjam/tambah',[PinjamController::class,'pinjamtambah'])->name('pinjam');
Route::get('/pinjam/hapus/{idpinjam}',[PinjamController::class,'pinjamhapus'])->name('pinjam');
Route::get('/pinjam/edit/{idpinjam}',[PinjamController::class,'pinjamedit'])->name('pinjam');

