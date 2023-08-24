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


Route::get('/area-rayon', function () {
    return view('pages.perusahaan.marketing.area-rayon', [
        'title' => "perusahaan"
    ]);
});
Route::get('/sub-rayon', function () {
    return view('pages.perusahaan.marketing.sub-rayon', [
        'title' => "perusahaan"
    ]);
});
Route::get('/sales', function () {
    return view('pages.perusahaan.marketing.sales', [
        'title' => "perusahaan"
    ]);
});
Route::get('/target-spv', function () {
    return view('pages.perusahaan.marketing.target-spv', [
        'title' => "perusahaan"
    ]);
});
Route::get('/target-sales', function () {
    return view('pages.perusahaan.marketing.target-sales', [
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

Route::get('/kelompok', function () {
    return view('pages.master.customer.kelompok', [
        'title' => 'master'
    ]);
});
Route::get('/pelanggan', function () {
    return view('pages.master.customer.pelanggan', [
        'title' => 'master'
    ]);
});

Route::get('/produsen', function () {
    return view('pages.master.produsen.produsen', [
        'title' => 'master'
    ]);
});
Route::get('/suplier', function () {
    return view('pages.master.produsen.suplier', [
        'title' => 'master'
    ]);
});

Route::get('/akun-akuntansi', function () {
    return view('pages.master.akuntansi.akun-akuntansi', [
        'title' => 'master'
    ]);
});

//set awal
Route::get('/hutang-awal', function () {
    return view('pages.set-awal.hutang-awal', [
        'title' => 'setting awal'
    ]);
});
Route::get('/piutang-awal', function () {
    return view('pages.set-awal.piutang-awal', [
        'title' => 'setting awal'
    ]);
});
Route::get('/stok-awal', function () {
    return view('pages.set-awal.stok-awal', [
        'title' => 'setting awal'
    ]);
});
Route::get('/saldo-awal', function () {
    return view('pages.set-awal.saldo-awal.saldo-awal', [
        'title' => 'setting awal'
    ]);
});
Route::get('/tambah-saldo-awal', function () {
    return view('pages.set-awal.saldo-awal.tambah-saldo-awal', [
        'title' => 'setting awal'
    ]);
});

//persediaan
Route::get('/histori-stok', function () {
    return view('pages.persediaan.histori-stok', [
        'title' => 'persediaan'
    ]);
});
Route::get('/stok-opname', function () {
    return view('pages.persediaan.stok-opname.opname', [
        'title' => 'persediaan'
    ]);
});
Route::get('/tambah-stok-opname', function () {
    return view('pages.persediaan.stok-opname.tambah-stok', [
        'title' => 'persediaan'
    ]);
});
Route::get('/mutasi-stok', function () {
    return view('pages.persediaan.mutasi-stok.mutasi', [
        'title' => 'persediaan'
    ]);
});
Route::get('/tambah-mutasi-stok', function () {
    return view('pages.persediaan.mutasi-stok.tambah-mutasi', [
        'title' => 'persediaan'
    ]);
});

//transaksi
//rencana pengadaan
Route::get('/analisis-pareto-abc', function () {
    return view('pages.transaksi.pengadaan.analisis-pareto', [
        'title' => 'transaksi'
    ]);
});
Route::get('/analisis-order', function () {
    return view('pages.transaksi.pengadaan.analisis-order', [
        'title' => 'transaksi'
    ]);
});
Route::get('/defecta', function () {
    return view('pages.transaksi.pengadaan.defecta.data-defecta', [
        'title' => 'transaksi'
    ]);
});
Route::get('/histori-pembelian', function () {
    return view('pages.transaksi.pengadaan.defecta.histori-pembelian', [
        'title' => 'transaksi'
    ]);
});

Route::get('/pembuatan-sp', function () {
    return view('pages.transaksi.pengadaan.sp.surat-pesanan', [
        'title' => 'transaksi'
    ]);
});
Route::get('/cek-rencana-order', function () {
    return view('pages.transaksi.pengadaan.sp.rencana-order', [
        'title' => 'transaksi'
    ]);
});

//pembelian
Route::get('/pembelian', function () {
    return view('pages.transaksi.pembelian.pembelian.data-pembelian', [
        'title' => 'transaksi'
    ]);
});
Route::get('/tambah-pembelian', function () {
    return view('pages.transaksi.pembelian.pembelian.tambah-pembelian', [
        'title' => 'transaksi'
    ]);
});
Route::get('/terima-barang', function () {
    return view('pages.transaksi.pembelian.terima-barang.terima-barang', [
        'title' => 'transaksi'
    ]);
});
Route::get('/tambah-terima-barang', function () {
    return view('pages.transaksi.pembelian.terima-barang.tambah-terima-barang', [
        'title' => 'transaksi'
    ]);
});
