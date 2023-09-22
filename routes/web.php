<?php

use App\Http\Controllers\AreaRayonController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PajakController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SetAksesController;
use App\Http\Controllers\SetUserController;
use App\Http\Controllers\SubRayonController;
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
    return view('dashboard', [
        'title' => 'dashboard'
    ]);
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


// Route::middleware('auth')->group(function () {
// });

Route::middleware(['auth'])->group(function () {
    //profile
    Route::get('/profil-perusahaan', [ProfileController::class, 'index'])->name('profile');
    Route::post('/update-profil-perusahaan', [ProfileController::class, 'updateProfile'])->name('update.profile');
    Route::post('/get-cities/{province_id}', [ProfileController::class, 'getCities'])->name('getCities');

    //pajak
    Route::get('/pajak-perusahaan', [PajakController::class, 'index'])->name('pajak');
    Route::post('/update-pajak-perusahaan', [PajakController::class, 'updatePajak'])->name('update.pajak');
    Route::post('/delete-pajak-perusahaan/{id}', [PajakController::class, 'deletePajak'])->name('delete.pajak');

    //jabatan
    Route::get('/jabatan', [JabatanController::class, 'index'])->name('jabatan');
    Route::post('/tambah-jabatan', [JabatanController::class, 'createJabatan'])->name('create.jabatan');
    Route::post('/edit-jabatan/{id}', [JabatanController::class, 'editJabatan'])->name('edit.jabatan');
    Route::post('/delete-jabatan/{id}', [JabatanController::class, 'deleteJabatan'])->name('delete.jabatan');

    //nama pegawai
    Route::get('/nama-pegawai', [PegawaiController::class, 'index'])->name('pegawai');
    Route::post('/tambah-nama-pegawai', [PegawaiController::class, 'createPegawai'])->name('create.pegawai');
    Route::post('/edit-nama-pegawai/{id}', [PegawaiController::class, 'editPegawai'])->name('edit.pegawai');
    Route::post('/delete-nama-pegawai/{id}', [PegawaiController::class, 'deletePegawai'])->name('delete.pegawai');

    //area rayon
    Route::get('/area-rayon', [AreaRayonController::class, 'index'])->name('area_rayon');
    Route::post('/tambah-area-rayon', [AreaRayonController::class, 'tambahAreaRayon'])->name('tambah.area_rayon');
    Route::post('/edit-area-rayon/{id}', [AreaRayonController::class, 'editAreaRayon'])->name('edit.area_rayon');
    Route::post('/delete-area-rayon/{id}', [AreaRayonController::class, 'deleteAreaRayon'])->name('delete.area_rayon');

    //area sub rayon
    Route::get('/sub-rayon', [SubRayonController::class, 'index'])->name('sub_rayon');
    Route::post('/tambah-sub-rayon', [SubRayonController::class, 'tambahSubRayon'])->name('tambah.sub_rayon');
    Route::post('/edit-sub-rayon/{id}', [SubRayonController::class, 'editSubRayon'])->name('edit.sub_rayon');
    Route::post('/delete-sub-rayon/{id}', [SubRayonController::class, 'deleteSubRayon'])->name('delete.sub_rayon');

    //sales
    Route::get('/sales', [SalesController::class, 'index'])->name('sales');
    Route::post('/tambah-sales', [SalesController::class, 'tambahSales'])->name('tambah.sales');
    Route::post('/edit-sales/{id}', [SalesController::class, 'editSales'])->name('edit.sales');
    Route::post('/delete-sales/{id}', [SalesController::class, 'deleteSales'])->name('delete.sales');

    //set akses
    Route::get('/set-akses', [SetAksesController::class, 'index'])->name('set_akses');
    Route::post('/tambah-set-akses', [SetAksesController::class, 'tambahSetAkses'])->name('tambah.set_akses');
    Route::post('/edit-set-akses/{id}', [SetAksesController::class, 'editSetAkses'])->name('edit.set_akses');
    Route::post('/delete-set-akses/{id}', [SetAksesController::class, 'deleteSetAkses'])->name('delete.set_akses');

    //set user
    Route::get('/set-user', [SetUserController::class, 'index'])->name('set_user');
    Route::post('/tambah-set-user', [SetUserController::class, 'tambahUser'])->name('tambah.set_user');
    Route::post('/edit-set-user/{id}', [SetUserController::class, 'editUser'])->name('edit.set_user');
    Route::post('/delete-set-user/{id}', [SetUserController::class, 'deleteUser'])->name('delete.set_user');
});




Route::get('/target-spv', function () {
    return view('pages.perusahaan.marketing.target-spv', [
        'title' => "perusahaan"
    ]);
})->middleware(['auth']);
Route::get('/target-sales', function () {
    return view('pages.perusahaan.marketing.target-sales', [
        'title' => "perusahaan"
    ]);
})->middleware(['auth']);

//master
Route::get('/obat-dan-barang', function () {
    return view('pages.master.produk.obat-barang', [
        'title' => 'master'
    ]);
})->middleware(['auth']);
Route::get('/satuan', function () {
    return view('pages.master.produk.satuan', [
        'title' => 'master'
    ]);
})->middleware(['auth']);
Route::get('/set-harga-jual', function () {
    return view('pages.master.produk.set-harga', [
        'title' => 'master'
    ]);
})->middleware(['auth']);
Route::get('/golongan', function () {
    return view('pages.master.produk.golongan', [
        'title' => 'master'
    ]);
})->middleware(['auth']);
Route::get('/sub-golongan', function () {
    return view('pages.master.produk.sub-golongan', [
        'title' => 'master'
    ]);
})->middleware(['auth']);
Route::get('/jenis-obat-barang', function () {
    return view('pages.master.produk.jenis-obat-barang', [
        'title' => 'master'
    ]);
})->middleware(['auth']);

Route::get('/nama-gudang', function () {
    return view('pages.master.gudang.nama-gudang', [
        'title' => 'master'
    ]);
})->middleware(['auth']);
Route::get('/rak', function () {
    return view('pages.master.gudang.rak', [
        'title' => 'master'
    ]);
})->middleware(['auth']);
Route::get('/sub-rak', function () {
    return view('pages.master.gudang.sub-rak', [
        'title' => 'master'
    ]);
})->middleware(['auth']);

Route::get('/kelompok', function () {
    return view('pages.master.customer.kelompok', [
        'title' => 'master'
    ]);
})->middleware(['auth']);
Route::get('/pelanggan', function () {
    return view('pages.master.customer.pelanggan', [
        'title' => 'master'
    ]);
})->middleware(['auth']);

Route::get('/produsen', function () {
    return view('pages.master.produsen.produsen', [
        'title' => 'master'
    ]);
})->middleware(['auth']);
Route::get('/suplier', function () {
    return view('pages.master.produsen.suplier', [
        'title' => 'master'
    ]);
})->middleware(['auth']);

Route::get('/akun-akuntansi', function () {
    return view('pages.master.akuntansi.akun-akuntansi', [
        'title' => 'master'
    ]);
})->middleware(['auth']);

//set awal
Route::get('/hutang-awal', function () {
    return view('pages.set-awal.hutang-awal', [
        'title' => 'setting awal'
    ]);
})->middleware(['auth']);
Route::get('/piutang-awal', function () {
    return view('pages.set-awal.piutang-awal', [
        'title' => 'setting awal'
    ]);
})->middleware(['auth']);
Route::get('/stok-awal', function () {
    return view('pages.set-awal.stok-awal', [
        'title' => 'setting awal'
    ]);
})->middleware(['auth']);
Route::get('/saldo-awal', function () {
    return view('pages.set-awal.saldo-awal.saldo-awal', [
        'title' => 'setting awal'
    ]);
})->middleware(['auth']);
Route::get('/tambah-saldo-awal', function () {
    return view('pages.set-awal.saldo-awal.tambah-saldo-awal', [
        'title' => 'setting awal'
    ]);
})->middleware(['auth']);

//persediaan
Route::get('/histori-stok', function () {
    return view('pages.persediaan.histori-stok', [
        'title' => 'persediaan'
    ]);
})->middleware(['auth']);
Route::get('/stok-opname', function () {
    return view('pages.persediaan.stok-opname.opname', [
        'title' => 'persediaan'
    ]);
})->middleware(['auth']);
Route::get('/tambah-stok-opname', function () {
    return view('pages.persediaan.stok-opname.tambah-stok', [
        'title' => 'persediaan'
    ]);
})->middleware(['auth']);
Route::get('/mutasi-stok', function () {
    return view('pages.persediaan.mutasi-stok.mutasi', [
        'title' => 'persediaan'
    ]);
})->middleware(['auth']);
Route::get('/tambah-mutasi-stok', function () {
    return view('pages.persediaan.mutasi-stok.tambah-mutasi', [
        'title' => 'persediaan'
    ]);
})->middleware(['auth']);

//transaksi
//rencana pengadaan
Route::get('/analisis-pareto-abc', function () {
    return view('pages.transaksi.pengadaan.analisis-pareto', [
        'title' => 'transaksi'
    ]);
})->middleware(['auth']);
Route::get('/analisis-order', function () {
    return view('pages.transaksi.pengadaan.analisis-order', [
        'title' => 'transaksi'
    ]);
})->middleware(['auth']);
Route::get('/defecta', function () {
    return view('pages.transaksi.pengadaan.defecta.data-defecta', [
        'title' => 'transaksi'
    ]);
})->middleware(['auth']);
Route::get('/histori-pembelian', function () {
    return view('pages.transaksi.pengadaan.defecta.histori-pembelian', [
        'title' => 'transaksi'
    ]);
})->middleware(['auth']);

Route::get('/pembuatan-sp', function () {
    return view('pages.transaksi.pengadaan.sp.surat-pesanan', [
        'title' => 'transaksi'
    ]);
})->middleware(['auth']);
Route::get('/cek-rencana-order', function () {
    return view('pages.transaksi.pengadaan.sp.rencana-order', [
        'title' => 'transaksi'
    ]);
})->middleware(['auth']);

//pembelian
Route::get('/pembelian', function () {
    return view('pages.transaksi.pembelian.pembelian.data-pembelian', [
        'title' => 'transaksi'
    ]);
})->middleware(['auth']);
Route::get('/tambah-pembelian', function () {
    return view('pages.transaksi.pembelian.pembelian.tambah-pembelian', [
        'title' => 'transaksi'
    ]);
})->middleware(['auth']);
Route::get('/terima-barang', function () {
    return view('pages.transaksi.pembelian.terima-barang.terima-barang', [
        'title' => 'transaksi'
    ]);
})->middleware(['auth']);
Route::get('/tambah-terima-barang', function () {
    return view('pages.transaksi.pembelian.terima-barang.tambah-terima-barang', [
        'title' => 'transaksi'
    ]);
})->middleware(['auth']);
Route::get('/retur-pembelian', function () {
    return view('pages.transaksi.pembelian.retur-pembelian.data-retur', [
        'title' => 'transaksi'
    ]);
})->middleware(['auth']);
Route::get('/tambah-retur-pembelian', function () {
    return view('pages.transaksi.pembelian.retur-pembelian.tambah-retur', [
        'title' => 'transaksi'
    ]);
})->middleware(['auth']);

//penjualan
//sp penjualan
Route::get('/sp-penjualan', function () {
    return view('pages.transaksi.penjualan.sp-penjualan.daftar-sp', [
        'title' => 'transaksi'
    ]);
})->middleware(['auth']);
Route::get('/detail-sp-penjualan', function () {
    return view('pages.transaksi.penjualan.sp-penjualan.detail-sp-penjualan', [
        'title' => 'transaksi'
    ]);
})->middleware(['auth']);
//cek pesanan penjualan
Route::get('/cek-sp-penjualan', function () {
    return view('pages.transaksi.penjualan.cek-pesanan.cek-pesanan', [
        'title' => 'transaksi'
    ]);
})->middleware(['auth']);
Route::get('/edit-pesanan-penjualan', function () {
    return view('pages.transaksi.penjualan.cek-pesanan.pesanan-penjualan', [
        'title' => 'transaksi'
    ]);
})->middleware(['auth']);
//penjualan
Route::get('/penjualan', function () {
    return view('pages.transaksi.penjualan.penjualan.data-penjualan', [
        'title' => 'transaksi'
    ]);
})->middleware(['auth']);
Route::get('/tambah-penjualan', function () {
    return view('pages.transaksi.penjualan.penjualan.tambah-penjualan', [
        'title' => 'transaksi'
    ]);
})->middleware(['auth']);
//retur penjualan
Route::get('/retur-penjualan', function () {
    return view('pages.transaksi.penjualan.retur.retur-penjualan', [
        'title' => 'transaksi'
    ]);
})->middleware(['auth']);
Route::get('/tambah-retur-penjualan', function () {
    return view('pages.transaksi.penjualan.retur.tambah-retur', [
        'title' => 'transaksi'
    ]);
})->middleware(['auth']);
//surat jalan
Route::get('/surat-jalan', function () {
    return view('pages.transaksi.penjualan.surat-jalan.surat', [
        'title' => 'transaksi'
    ]);
})->middleware(['auth']);
Route::get('/tambah-surat-jalan', function () {
    return view('pages.transaksi.penjualan.surat-jalan.tambah-surat', [
        'title' => 'transaksi'
    ]);
})->middleware(['auth']);

//keuangan dan akuntansi
//->keuangan
//-->kontrabon
Route::get('/kontrabon', function () {
    return view('pages.keuangan-akuntansi.keuangan.kontrabon.kontrabon', [
        'title' => 'keuangan & akuntansi'
    ]);
})->middleware(['auth']);
Route::get('/tambah-kontrabon', function () {
    return view('pages.keuangan-akuntansi.keuangan.kontrabon.tambah-kontrabon', [
        'title' => 'keuangan & akuntansi'
    ]);
})->middleware(['auth']);
//-->tagihan pelanggan
Route::get('/tagihan-pelanggan', function () {
    return view('pages.keuangan-akuntansi.keuangan.tagihan.daftar-tagihan', [
        'title' => 'keuangan & akuntansi'
    ]);
})->middleware(['auth']);
Route::get('/tambah-tagihan-pelanggan', function () {
    return view('pages.keuangan-akuntansi.keuangan.tagihan.tambah-tagihan', [
        'title' => 'keuangan & akuntansi'
    ]);
})->middleware(['auth']);
//--->pembayaran hutang
Route::get('/pembayaran-hutang', function () {
    return view('pages.keuangan-akuntansi.keuangan.pembayaran-hutang.pembayaran-hutang', [
        'title' => 'keuangan & akuntansi'
    ]);
})->middleware(['auth']);
Route::get('/tambah-pembayaran-hutang', function () {
    return view('pages.keuangan-akuntansi.keuangan.pembayaran-hutang.tambah-pembayaran', [
        'title' => 'keuangan & akuntansi'
    ]);
})->middleware(['auth']);
//--pembayaran piutang
Route::get('/pembayaran-piutang', function () {
    return view('pages.keuangan-akuntansi.keuangan.pembayaran-piutang.pembayaran-piutang', [
        'title' => 'keuangan & akuntansi'
    ]);
})->middleware(['auth']);
Route::get('/tambah-pembayaran-piutang', function () {
    return view('pages.keuangan-akuntansi.keuangan.pembayaran-piutang.tambah-pembayaran-piutang', [
        'title' => 'keuangan & akuntansi'
    ]);
})->middleware(['auth']);
//--->mutasi saldo
Route::get('/mutasi-saldo', function () {
    return view('pages.keuangan-akuntansi.keuangan.mutasi-saldo', [
        'title' => 'keuangan & akuntansi'
    ]);
})->middleware(['auth']);
//--->jurnal akun
Route::get('/jurnal-akun', function () {
    return view('pages.keuangan-akuntansi.keuangan.jurnal-akun.jurnal-akun', [
        'title' => 'keuangan & akuntansi'
    ]);
})->middleware(['auth']);
Route::get('/tambah-jurnal-akun', function () {
    return view('pages.keuangan-akuntansi.keuangan.jurnal-akun.tambah-jurnal-akun', [
        'title' => 'keuangan & akuntansi'
    ]);
})->middleware(['auth']);

//-->akuntansi
//--->jurnal umum
Route::get('/jurnal-umum', function () {
    return view('pages.keuangan-akuntansi.akuntansi.jurnal-umum', [
        'title' => 'keuangan & akuntansi'
    ]);
})->middleware(['auth']);
//--->buku besar
Route::get('/buku-besar', function () {
    return view('pages.keuangan-akuntansi.akuntansi.buku-besar', [
        'title' => 'keuangan & akuntansi'
    ]);
})->middleware(['auth']);
//--->neraca lajur
Route::get('/neraca-lajur', function () {
    return view('pages.keuangan-akuntansi.akuntansi.neraca-lajur', [
        'title' => 'keuangan & akuntansi'
    ]);
})->middleware(['auth']);
//--->Neraca
Route::get('/neraca', function () {
    return view('pages.keuangan-akuntansi.akuntansi.neraca', [
        'title' => 'keuangan & akuntansi'
    ]);
})->middleware(['auth']);
//--->laba/rugi
Route::get('/laba-rugi', function () {
    return view('pages.keuangan-akuntansi.akuntansi.laba-rugi', [
        'title' => 'keuangan & akuntansi'
    ]);
})->middleware(['auth']);

//->utilities
//-->pajak
//--->pajak masukan
Route::get('/pajak-masukan', function () {
    return view('pages.utilities.pajak.pajak-masukan', [
        'title' => 'utilities'
    ]);
})->middleware(['auth']);
//---> retur pajak masukan
Route::get('/retur-pajak-masukan', function () {
    return view('pages.utilities.pajak.retur-pajak-masukan', [
        'title' => 'utilities'
    ]);
})->middleware(['auth']);
//---> pajak keluaran
Route::get('/pajak-keluaran', function () {
    return view('pages.utilities.pajak.pajak-keluaran', [
        'title' => 'utilities'
    ]);
})->middleware(['auth']);
//---> retur pajak keluaran
Route::get('/retur-pajak-keluaran', function () {
    return view('pages.utilities.pajak.retur-pajak-keluaran', [
        'title' => 'utilities'
    ]);
})->middleware(['auth']);