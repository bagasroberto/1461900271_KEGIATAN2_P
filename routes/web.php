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


Route::get('/index', function () {
    return view('index0271');
});
Route::get('/index','App\Http\Controllers\MainControll@index');

Route::get('/databuku', function () {
    return view('databuku0271');
});
Route::get('/databuku','App\Http\Controllers\MainControll@databuku');

Route::get('/dataanggota', function () {
    return view('dataanggota0271');
});
Route::get('/dataanggota','App\Http\Controllers\MainControll@dataanggota');

Route::get('/datapetugas', function () {
    return view('datapetugas0271');
});
Route::get('/datapetugas','App\Http\Controllers\MainControll@datapetugas');

Route::get('/statuspeminjaman', function () {
    return view('statuspeminjaman0271');
});
Route::get('/statuspeminjaman','App\Http\Controllers\MainControll@statuspeminjaman');

Route::get('/laporan', function () {
    return view('laporan0271');
});
Route::get('/laporan','App\Http\Controllers\MainControll@laporan');
Route::get('/dataAnggotaLike', 'App\Http\Controllers\MainControll@anggotaLike');
Route::get('/laporanSelectLike', 'App\Http\Controllers\MainControll@pinjamSelectLike');