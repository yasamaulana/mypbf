<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::get('/tes', function () {
    return view('tes');
});

//perusahaan
Route::get('/profil-perusahaan', function () {
    return view('pages.perusahaan.profil');
});
Route::get('/pajak-perusahaan', function () {
    return view('pages.perusahaan.pajak');
});
Route::get('/jabatan', function () {
    return view('pages.perusahaan.pegawai.jabatan');
});
Route::get('/nama-pegawai', function () {
    return view('pages.perusahaan.pegawai.nama-pegawai');
});
Route::get('/set-akses', function () {
    return view('pages.perusahaan.pegawai.set-akses');
});

//master
Route::get('/obat-dan-barang', function () {
    return view('pages.master.produk.obat-barang');
});
Route::get('/satuan', function () {
    return view('pages.master.produk.satuan');
});
Route::get('/golongan', function () {
    return view('pages.master.produk.golongan');
});
Route::get('/sub-golongan', function () {
    return view('pages.master.produk.sub-golongan');
});
Route::get('/jenis-obat-barang', function () {
    return view('pages.master.produk.jenis-obat-barang');
});

Route::get('/nama-gudang', function () {
    return view('pages.master.gudang.nama-gudang');
});
Route::get('/rak', function () {
    return view('pages.master.gudang.rak');
});
Route::get('/sub-rak', function () {
    return view('pages.master.gudang.sub-rak');
});