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
    return view('home', [
        'title' => 'dashboard'
    ]);
});

//perusahaan
Route::get('/profil-perusahaan', function () {
    return view('pages.perusahaan.profil', [
        'title' => "perusahaan"
    ]);
});

Route::get('/pajak-perusahaan', function () {
    return view('pages.perusahaan.pajak', [
        'title' => "perusahaan"
    ]);
});
Route::get('/jabatan', function () {
    return view('pages.perusahaan.pegawai.jabatan', [
        'title' => "perusahaan"
    ]);
});
Route::get('/nama-pegawai', function () {
    return view('pages.perusahaan.pegawai.nama-pegawai', [
        'title' => "perusahaan"
    ]);
});
Route::get('/set-akses', function () {
    return view('pages.perusahaan.pegawai.set-akses', [
        'title' => "perusahaan"
    ]);
});
Route::get('/set-user', function () {
    return view('pages.perusahaan.pegawai.set-user', [
        'title' => "perusahaan"
    ]);
});

//master
Route::get('/obat-dan-barang', function () {
    return view('pages.master.produk.obat-barang', [
        'title' => 'master'
    ]);
});
Route::get('/satuan', function () {
    return view('pages.master.produk.satuan', [
        'title' => 'master'
    ]);
});
Route::get('/set-harga-jual', function () {
    return view('pages.master.produk.set-harga', [
        'title' => 'master'
    ]);
});
Route::get('/golongan', function () {
    return view('pages.master.produk.golongan', [
        'title' => 'master'
    ]);
});
Route::get('/sub-golongan', function () {
    return view('pages.master.produk.sub-golongan', [
        'title' => 'master'
    ]);
});
Route::get('/jenis-obat-barang', function () {
    return view('pages.master.produk.jenis-obat-barang', [
        'title' => 'master'
    ]);
});

Route::get('/nama-gudang', function () {
    return view('pages.master.gudang.nama-gudang', [
        'title' => 'master'
    ]);
});
Route::get('/rak', function () {
    return view('pages.master.gudang.rak', [
        'title' => 'master'
    ]);
});
Route::get('/sub-rak', function () {
    return view('pages.master.gudang.sub-rak', [
        'title' => 'master'
    ]);
});
