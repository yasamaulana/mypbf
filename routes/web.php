<?php

use App\Http\Controllers\AkunAkutansiController;
use App\Http\Controllers\AreaRayonController;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\BukuBesarController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\HutangAwalController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\JenisObatBarangController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\NeracaController;
use App\Http\Controllers\NeracaLajurController;
use App\Http\Controllers\ObatBarangController;
use App\Http\Controllers\PajakController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PiutangAwalController;
use App\Http\Controllers\ProdusenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\SaldoAwalController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\SetAksesController;
use App\Http\Controllers\SetHargaJualController;
use App\Http\Controllers\SetUserController;
use App\Http\Controllers\StokAwalController;
use App\Http\Controllers\SubGolonganController;
use App\Http\Controllers\SubRakController;
use App\Http\Controllers\SubRayonController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\TargetProdukController;
use App\Http\Controllers\TargetSalesController;
use App\Http\Controllers\TargetSPVController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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

    //target spv
    Route::get('/target-spv', [TargetSPVController::class, 'index'])->name('target_spv');
    Route::post('/tambah-target-spv', [TargetSPVController::class, 'tambahTargetSpv'])->name('tambah.target_spv');
    Route::post('/edit-target-spv/{id}', [TargetSPVController::class, 'editTargetSpv'])->name('edit.target_spv');
    Route::post('/delete-target-spv/{id}', [TargetSPVController::class, 'deleteTargetSpv'])->name('delete.target_spv');

    //target sales
    Route::get('/target-sales', [TargetSalesController::class, 'index'])->name('target_sales');
    Route::post('/tambah-target-sales', [TargetSalesController::class, 'tambahTargetSales'])->name('tambah.target_sales');
    Route::post('/edit-target-sales/{id}', [TargetSalesController::class, 'editTargetSales'])->name('edit.target_sales');
    Route::post('/delete-target-sales/{id}', [TargetSalesController::class, 'deleteTargetSales'])->name('delete.target_sales');

    //target produk
    Route::get('/target-produk', [TargetProdukController::class, 'index'])->name('target_produk');
    Route::post('/tambah-target-produk', [TargetProdukController::class, 'tambahTargetProduk'])->name('tambah.target_produk');
    Route::post('/edit-target-produk', [TargetProdukController::class, 'editTargetProduk'])->name('edit.target_produk');
    Route::post('/delete-target-produk', [TargetProdukController::class, 'deleteTargetProduk'])->name('delete.target_produk');

    //master
    //obat dan barang
    Route::get('/obat-dan-barang', [ObatBarangController::class, 'index'])->name('obat-barang');
    Route::post('/tambah-obat-dan-barang', [ObatBarangController::class, 'tambahObat'])->name('tambah.obat-barang');
    Route::post('/edit-obat-dan-barang/{id}', [ObatBarangController::class, 'editObat'])->name('edit.obat-barang');
    Route::post('/delete-obat-dan-barang/{id}', [ObatBarangController::class, 'deleteObat'])->name('delete.obat-barang');
    Route::get('/cari-produk-e-report', [ObatBarangController::class, 'ProdukEReport'])->name('e-report.obat-barang');
    Route::get('/tampil-produk-e-report', [ObatBarangController::class, 'cariProdukEReport'])->name('cari.e-report');


    Route::get('/set-harga-jual/{id}', [SetHargaJualController::class, 'index'])->name('setHarga');
    Route::post('/create-set-harga-jual', [SetHargaJualController::class, 'createHarga'])->name('create.setHarga');
    Route::post('/set-harga-jual', [SetHargaJualController::class, 'updateHarga'])->name('update.setHarga');

    //satuan
    Route::get('/satuan', [SatuanController::class, 'index'])->name('satuan');
    Route::post('/tambah-satuan', [SatuanController::class, 'tambahSatuan'])->name('tambah.satuan');
    Route::post('/edit-satuan/{id}', [SatuanController::class, 'editSatuan'])->name('edit.satuan');
    Route::post('/delete-satuan/{id}', [SatuanController::class, 'deleteSatuan'])->name('delete.satuan');

    //golongan
    Route::get('/golongan', [GolonganController::class, 'index'])->name('golongan');
    Route::post('/tambah-golongan', [GolonganController::class, 'tambahGolongan'])->name('tambah.golongan');
    Route::post('/edit-golongan/{id}', [GolonganController::class, 'editGolongan'])->name('edit.golongan');
    Route::post('/delete-golongan/{id}', [GolonganController::class, 'deleteGolongan'])->name('delete.golongan');

    Route::get('/sub-golongan', [SubGolonganController::class, 'index'])->name('sub-golongan');
    Route::post('/tambah-sub-golongan', [SubGolonganController::class, 'tambahSubGolongan'])->name('tambah.sub-golongan');
    Route::post('/edit-sub-golongan/{id}', [SubGolonganController::class, 'editSubGolongan'])->name('edit.sub-golongan');
    Route::post('/delete-sub-golongan/{id}', [SubGolonganController::class, 'deleteSubGolongan'])->name('delete.sub-golongan');

    //jenis obat barang
    Route::get('/jenis-obat-barang', [JenisObatBarangController::class, 'index'])->name('jenis-obat');
    Route::post('/tambah-jenis-obat-barang', [JenisObatBarangController::class, 'tambahJenis'])->name('tambah.jenis-obat');
    Route::post('/edit-jenis-obat-barang/{id}', [JenisObatBarangController::class, 'editJenis'])->name('edit.jenis-obat');
    Route::post('/delete-jenis-obat-barang/{id}', [JenisObatBarangController::class, 'deleteJenis'])->name('delete.jenis-obat');

    Route::get('/nama-gudang', [GudangController::class, 'index'])->name('gudang');
    Route::post('/tambah-nama-gudang', [GudangController::class, 'tambahGudang'])->name('tambah.gudang');
    Route::post('/edit-nama-gudang/{id}', [GudangController::class, 'editGudang'])->name('edit.gudang');
    Route::post('/delete-nama-gudang/{id}', [GudangController::class, 'deleteGudang'])->name('delete.gudang');

    //rak
    Route::get('/rak', [RakController::class, 'index'])->name('rak');
    Route::post('/tambah-rak', [RakController::class, 'tambahRak'])->name('tambah.rak');
    Route::post('/edit-rak/{id}', [RakController::class, 'editRak'])->name('edit.rak');
    Route::post('/delete-rak/{id}', [RakController::class, 'deleteRak'])->name('delete.rak');

    //sub rak 
    Route::get('/sub-rak', [SubRakController::class, 'index'])->name('sub-rak');
    Route::post('/tambah-sub-rak', [SubRakController::class, 'tambahSubRak'])->name('tambah.sub-rak');
    Route::post('/edit-sub-rak/{id}', [SubRakController::class, 'editSubRak'])->name('edit.sub-rak');
    Route::post('/delete-sub-rak/{id}', [SubRakController::class, 'deleteSubRak'])->name('delete.sub-rak');

    //customer
    //kelompok
    Route::get('/kelompok', [KelompokController::class, 'index'])->name('kelompok');
    Route::post('/tambah-kelompok', [KelompokController::class, 'tambahKelompok'])->name('tambah.kelompok');
    Route::post('/edit-kelompok/{id}', [KelompokController::class, 'editKelompok'])->name('edit.kelompok');
    Route::post('/delete-kelompok/{id}', [KelompokController::class, 'deleteKelompok'])->name('delete.kelompok');

    //pelanggan
    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan');
    Route::post('/tambah-pelanggan', [PelangganController::class, 'tambahPelanggan'])->name('tambah.pelanggan');
    Route::post('/edit-pelanggan/{id}', [PelangganController::class, 'editPelanggan'])->name('edit.pelanggan');
    Route::post('/delete-pelanggan/{id}', [PelangganController::class, 'deletePelanggan'])->name('delete.pelanggan');

    //produsen dan customer
    //produsen
    Route::get('/produsen', [ProdusenController::class, 'index'])->name('produsen');
    Route::post('/tambah-produsen', [ProdusenController::class, 'tambahProdusen'])->name('tambah.produsen');
    Route::post('/edit-produsen/{id}', [ProdusenController::class, 'editProdusen'])->name('edit.produsen');
    Route::post('/delete-produsen/{id}', [ProdusenController::class, 'deleteProdusen'])->name('delete.produsen');

    //suplier
    Route::get('/suplier', [SuplierController::class, 'index'])->name('suplier');
    Route::post('/tambah-suplier', [SuplierController::class, 'tambahSuplier'])->name('tambah.suplier');
    Route::post('/edit-suplier/{id}', [SuplierController::class, 'editSuplier'])->name('edit.suplier');
    Route::post('/delete-suplier/{id}', [SuplierController::class, 'deleteSuplier'])->name('delete.suplier');

    //set awal
    //stok awal
    Route::get('/stok-awal', [StokAwalController::class, 'index'])->name('stok-awal');
    Route::get('/get-nama-barang/{id}', [StokAwalController::class, 'getNamaBarang'])->name('get-barang');
    Route::post('/tambah-stok-awal', [StokAwalController::class, 'tambahStok'])->name('tambah.stok-awal');
    Route::post('/edit-stok-awal/{id}', [StokAwalController::class, 'editStok'])->name('edit.stok-awal');
    Route::post('/delete-stok-awal/{id}', [StokAwalController::class, 'deleteStok'])->name('delete.stok-awal');

    //set awal
    Route::get('/hutang-awal', [HutangAwalController::class, 'index'])->name("hutang-awal");
    Route::post('/tambah-hutang-awal', [HutangAwalController::class, 'create'])->name('tambah.hutang-awal');
    Route::post('/edit-hutang-awal/{id}', [HutangAwalController::class, 'edit'])->name('edit.hutang-awal');
    Route::post('/hapus-hutang-awal/{id}', [HutangAwalController::class, 'destroy'])->name('delete.hutang-awal');

    //piutang awal
    Route::get('/piutang-awal', [PiutangAwalController::class, 'index'])->name('piutang-awal');
    Route::post('/tambah-piutang-awal', [PiutangAwalController::class, 'create'])->name('tambah.piutang-awal');
    Route::post('/edit-piutang-awal/{id}', [PiutangAwalController::class, 'edit'])->name('edit.piutang-awal');
    Route::post('/hapus-piutang-awal/{id}', [PiutangAwalController::class, 'destroy'])->name('delete.piutang-awal');

    //akun akutansi
    Route::get('/akun-akuntansi', [AkunAkutansiController::class, 'index'])->name('akun-akutansi');
    Route::post('/tambah-akun-akuntansi', [AkunAkutansiController::class, 'tambahAkun'])->name('tambah.akun-akutansi');
    Route::post('/edit-akun-akuntansi/{id}', [AkunAkutansiController::class, 'editAkun'])->name('edit.akun-akutansi');
    Route::post('/delete-akun-akuntansi/{id}', [AkunAkutansiController::class, 'deleteAkun'])->name('delete.akun-akutansi');

    //set awal
    Route::get('/setting-akuntansi', function () {
        return view('pages.master.akuntansi.setting-akuntansi', [
            'title' => 'master'
        ]);
    });

    //barcode
    Route::get('/barcode-produk', [BarcodeController::class, 'indexProduk'])->name('barcode.produk');
    Route::get('/barcode-pelanggan', [BarcodeController::class, 'indexPelanggan'])->name('barcode.pelanggan');
    Route::get('/download-barcode/{data}', [BarcodeController::class, 'download'])->name('download.barcode');

    // Saldo Awal
    Route::get('/saldo-awal', [SaldoAwalController::class, 'index'])->name('saldo-awal');

    //neraca
    Route::get('/neraca', [NeracaController::class, 'index'])->name('neraca');

    // neraca lajur
    Route::get('/neraca-lajur', [NeracaLajurController::class, 'index']);

    //--->buku besar
    Route::get('/buku-besar', [BukuBesarController::class, 'index'])->name('buku.besar');
});


// settings akuntansi
Route::get('/setting-akuntansi', function () {
    return view('');
});

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
