@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Data Retur Penjualan
        </h2>
        <a href="/tambah-retur-penjualan"><button class="btn btn-primary">Tambah +</button></a>
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <div class="sm:flex gap-3 mb-3 justify-between">
                <div class="w-56 relative text-slate-500 mr-auto mb-2 sm:mb-0">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                </div>
                <div class="flex gap-2 overflow-auto mr-auto mb-2 sm:mb-0">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-20">
                        Tanggal
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="date" placeholder="Stok dari master"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    <p class="mt-3">s/d</p>
                    <input data-tw-merge id="horizontal-form-1" type="date" placeholder="Stok dari master"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    <button class="btn btn-warning">Terapkan</button>
                </div>
                <a href="#"><button class="btn btn-success text-white">Excel</button></a>
            </div>
            <table class="table table-report mt-5">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">No</th>
                        <th class="whitespace-nowrap">No. Reff</th>
                        <th class="whitespace-nowrap">Tgl. Retur</th>
                        <th class="whitespace-nowrap">No. Faktur</th>
                        <th class="whitespace-nowrap">Nama Pelanggan</th>
                        <th class="whitespace-nowrap">Sales</th>
                        <th class="whitespace-nowrap">No Seri Pajak</th>
                        <th class="whitespace-nowrap">DPP</th>
                        <th class="whitespace-nowrap">PPN</th>
                        <th class="whitespace-nowrap">Total</th>
                        <th class="whitespace-nowrap">Keterangan</th>
                        <th class="whitespace-nowrap">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="intro-x">
                        <td class="border border-slate-600 ">1</td>
                        <td class="border border-slate-600 ">Contoh Data</td>
                        <td class="border border-slate-600 ">Contoh Data</td>
                        <td class="border border-slate-600 ">Contoh Data</td>
                        <td class="border border-slate-600 ">Contoh Data</td>
                        <td class="border border-slate-600 ">Contoh Data</td>
                        <td class="border border-slate-600 ">Contoh Data</td>
                        <td class="border border-slate-600 ">Contoh Data</td>
                        <td class="border border-slate-600 ">Contoh Data</td>
                        <td class="border border-slate-600 ">Contoh Data</td>
                        <td class="border border-slate-600 ">Contoh Data</td>
                        <td class="border border-slate-600 flex gap-2">
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                            <button class="btn btn-warning">Lihat</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-slate-600 font-bold text-center" colspan="7">Total</td>
                        <td class="border border-slate-600 font-bold"></td>
                        <td class="border border-slate-600 font-bold"></td>
                        <td class="border border-slate-600 font-bold"></td>
                        <td class="border border-slate-600 font-bold"></td>
                        <td class="border border-slate-600 font-bold"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
    </div>
@endsection
