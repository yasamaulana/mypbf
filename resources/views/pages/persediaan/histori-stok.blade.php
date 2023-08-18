@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Histori Stok
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <div data-tw-merge class="block sm:flex items-center ml-5">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-20">
                    Jenis
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
            </div>
            <div data-tw-merge class="block sm:flex items-center ml-5">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-20">
                    Rak
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
            </div>
            <div data-tw-merge class="block sm:flex items-center ml-5">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-32">
                    Sub Rak
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
            </div>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <div class="intro-y box mt-5">
            <table class="table mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">No.</th>
                        <th class="whitespace-nowrap">No. Reff</th>
                        <th class="whitespace-nowrap">Tgl. Faktur</th>
                        <th class="whitespace-nowrap">Suplier</th>
                        <th class="whitespace-nowrap">Jatuh Tempo</th>
                        <th class="whitespace-nowrap">Jumlah Piutang</th>
                        <th class="whitespace-nowrap">Jenis Piutang</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="intro-x">
                        <td class="w-40">1</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center text-success" href="javascript:;" data-tw-toggle="modal"
                                    data-tw-target="#cetak-kartu-stok"> <i data-feather="file-minus"
                                        class="w-4 h-4 mr-1"></i> Kartu Stok </a>
                                <!-- BEGIN: stok kartu Modal -->
                                <div id="cetak-kartu-stok" class="modal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header flex justify-end">
                                                <button class="btn btn-warning btn-sm">Cetak Kartu Stok</button>
                                            </div>
                                            <div class="modal-body p-5">
                                                <table>
                                                    <tr>
                                                        <td>Nama Obat Produk </td>
                                                        <td>:</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gudang</td>
                                                        <td>:</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rak</td>
                                                        <td>:</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sub Rak</td>
                                                        <td>:</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tipe</td>
                                                        <td>:</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Satuan Terkecil</td>
                                                        <td>:</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ket. Satuan</td>
                                                        <td>:</td>
                                                    </tr>
                                                </table>
                                                <div class="flex justify-end">
                                                    <div
                                                        class="w-56 relative text-slate-500 mt-3 border border-slate-600 rounded-lg">
                                                        <input type="text" class="form-control w-56 box pr-10"
                                                            placeholder="Search...">
                                                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"
                                                            data-feather="search"></i>
                                                    </div>
                                                </div>
                                                <div class="overflow-x-auto">
                                                    <table class="mt-5 table border border-slate-600">
                                                        <thead>
                                                            <tr>
                                                                <td class="border border-slate-600">No</td>
                                                                <td class="border border-slate-600">No. Reff</td>
                                                                <td class="border border-slate-600">No. Faktur</td>
                                                                <td class="border border-slate-600">Suplier/Pelanggan/Pasien
                                                                </td>
                                                                <td class="border border-slate-600">No Batch</td>
                                                                <td class="border border-slate-600">Exp. Date</td>
                                                                <td class="border border-slate-600">Stok Masuk</td>
                                                                <td class="border border-slate-600">Stok Keluar</td>
                                                                <td class="border border-slate-600">Sisa Stok</td>
                                                                <td class="border border-slate-600">Keterangan</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="border border-slate-600"></td>
                                                                <td class="border border-slate-600"></td>
                                                                <td class="border border-slate-600"></td>
                                                                <td class="border border-slate-600"></td>
                                                                <td class="border border-slate-600"></td>
                                                                <td class="border border-slate-600"></td>
                                                                <td class="border border-slate-600"></td>
                                                                <td class="border border-slate-600"></td>
                                                                <td class="border border-slate-600"></td>
                                                                <td class="border border-slate-600"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: stok kartu Modal -->
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END: Data List -->
    </div>
@endsection
