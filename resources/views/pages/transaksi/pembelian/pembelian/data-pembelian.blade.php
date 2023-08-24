@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Data Pembelian
        </h2>
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2 gap-3">
            <div data-tw-merge class="block sm:flex items-center">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-20">
                    Status
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
            </div>
            <div data-tw-merge class="block sm:flex items-center">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-32">
                    Tgl Faktur
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
            </div>
            <div data-tw-merge class="block sm:flex items-center">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-52">
                    Tgl Input Beli
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
            </div>
            <div data-tw-merge class="block sm:flex items-center">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-20">
                    Tgl JT
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
            </div>
            <button class="btn btn-primary">Tampilkan</button>
            <button class="btn btn-success text-white">Set Ulang</button>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <div class="flex gap-3 mb-3 justify-end">
                <div class="w-56 relative text-slate-500 mr-auto">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                </div>
                <a href="/tambah-pembelian"><button class="btn btn-primary text-white">Tambah +</button></a>
            </div>
            <div class="overflow-auto">
                <table class="table box mt-2">
                    <thead class="text-center">
                        <tr>
                            <th rowspan="2" class="border border-slate-600">No</th>
                            <th rowspan="2" class="border border-slate-600">No Reff</th>
                            <th colspan="7" class="border border-slate-600">Faktur</th>
                            <th colspan="2" class="border border-slate-600">Surat Pesanan</th>
                            <th colspan="3" class="border border-slate-600">Pajak</th>
                            <th rowspan="2" class="border border-slate-600">Total</th>
                            <th rowspan="2" class="border border-slate-600">Aksi</th>
                        </tr>
                        <tr>
                            <th class="border border-slate-600">No. Faktur</th>
                            <th class="border border-slate-600">Tgl Faktur</th>
                            <th class="border border-slate-600">Tgl Input</th>
                            <th class="border border-slate-600">Tgl JT</th>
                            <th class="border border-slate-600">Status</th>
                            <th class="border border-slate-600">Suplier</th>
                            <th class="border border-slate-600">Status PPN</th>
                            <th class="border border-slate-600">No. SP</th>
                            <th class="border border-slate-600">Tgl. SP</th>
                            <th class="border border-slate-600">No. Seri Pajak</th>
                            <th class="border border-slate-600">Tanggal</th>
                            <th class="border border-slate-600">Kompensasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-slate-600">1</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600 flex gap-2">
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger">Hapus</button>
                                <button class="btn btn-warning">Lihat</button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="14" class="font-bold text-center border border-slate-600">Total</td>
                            <td class="border border-slate-600"></td>
                            <td class="border border-slate-600"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END: Data List -->
    </div>
@endsection
