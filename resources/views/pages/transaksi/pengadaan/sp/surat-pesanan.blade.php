@extends('layout.main')

@section('main')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Data Pesanan Ke Suplier
        </h2>
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="flex flex-wrap items-center col-span-12 gap-3 mt-2 intro-y sm:flex-nowrap">
            <div class="flex gap-2 overflow-auto">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 font-bold sm:w-20">
                    Tanggal
                </label>
                <input data-tw-merge id="horizontal-form-1" type="date" placeholder="Stok dari master"
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                <p class="mt-3">s/d</p>
                <input data-tw-merge id="horizontal-form-1" type="date" placeholder="Stok dari master"
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
            </div>
            <button class="btn btn-primary">Tampilkan</button>
            <button class="btn btn-warning">Atur Ulang</button>
        </div>
        <!-- BEGIN: Data List -->
        <div class="col-span-12 overflow-auto intro-y lg:overflow-visible">
            <div class="flex justify-end gap-3 mb-3">
                <div class="relative w-56 mr-auto text-slate-500">
                    <input type="text" class="w-56 pr-10 form-control box" placeholder="Search...">
                    <i class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3" data-feather="search"></i>
                </div>
                <button class="text-white btn btn-primary" data-tw-target="#modal-setting-sp" data-tw-toggle="modal">Setting
                    No. SP</button>
                <a href="/cek-rencana-order"><button class="text-white btn btn-primary">Cek Rencana Order</button></a>
            </div>

            {{-- modal start --}}
            <div id="modal-setting-sp" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        @livewire('pembuatan-sp.set-no-sp')
                    </div>
                </div>
            </div>
            {{-- modal end --}}

            <table class="table -mt-2 table-report">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">No</th>
                        <th class="whitespace-nowrap">No Reff</th>
                        <th class="whitespace-nowrap">Tgl SP</th>
                        <th class="whitespace-nowrap">Suplier</th>
                        <th class="whitespace-nowrap">No SP</th>
                        <th class="whitespace-nowrap">Tipe SP</th>
                        <th class="whitespace-nowrap">Status SP</th>
                        <th class="whitespace-nowrap">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="intro-x">
                        <td class="">1</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="flex gap-2 w-60">
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                            <button class="btn btn-success btn-sm">Lihat</button>
                            <button class="btn btn-warning btn-sm">Cetak</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
    </div>
@endsection
