@extends('layout.main')

@section('main')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Histori Stok
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-nowrap">
            <div data-tw-merge class="items-center block ml-5 sm:flex">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 font-bold sm:w-20">
                    Gudang
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
            </div>
            <div data-tw-merge class="items-center block ml-5 sm:flex">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 font-bold sm:w-20">
                    Rak
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
            </div>
            <div data-tw-merge class="items-center block ml-5 sm:flex">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 font-bold sm:w-32">
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
    <div class="col-span-12 overflow-auto intro-y lg:overflow-visible">
        <div class="mt-5 intro-y box">
            <table class="table mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">No.</th>
                        <th class="whitespace-nowrap">No. Produk</th>
                        <th class="whitespace-nowrap">Tipe</th>
                        <th class="whitespace-nowrap">Gudang</th>
                        <th class="whitespace-nowrap">Rak</th>
                        <th class="whitespace-nowrap">Sub Rak</th>
                        <th class="whitespace-nowrap">Satuan Tekecil</th>
                        <th class="whitespace-nowrap">Ket Satuan</th>
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
                        <td class="">Contoh Data</td>
                        <td class="w-56 table-report__action">
                            <div class="flex items-center justify-center">
                                <a class="flex items-center text-success" href="javascript:;" data-tw-toggle="modal"
                                    data-tw-target="#cetak-kartu-stok"> <i data-feather="file-minus"
                                        class="w-4 h-4 mr-1"></i> Kartu Stok </a>
                                <!-- BEGIN: stok kartu Modal -->
                                <div id="cetak-kartu-stok" class="modal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="flex justify-end modal-header">
                                                <button class="btn btn-warning btn-sm">Cetak Kartu Stok</button>
                                            </div>
                                            <div class="p-5 modal-body">
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
                                                        class="relative w-56 mt-3 border rounded-lg text-slate-500 border-slate-600">
                                                        <input type="text" class="w-56 pr-10 form-control box"
                                                            placeholder="Search...">
                                                        <i class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3"
                                                            data-feather="search"></i>
                                                    </div>
                                                </div>
                                                <div class="overflow-x-auto">
                                                    <table class="table mt-5 border border-slate-600">
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
