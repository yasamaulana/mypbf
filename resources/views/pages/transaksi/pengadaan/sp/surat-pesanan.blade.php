@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Data Pesanan Ke Suplier
        </h2>
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2 gap-3">
            <div class="flex gap-2 overflow-auto">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-20">
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
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <div class="flex gap-3 mb-3 justify-end">
                <div class="w-56 relative text-slate-500 mr-auto">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                </div>
                <button class="btn btn-primary text-white" data-tw-target="#modal-setting-sp" data-tw-toggle="modal">Setting
                    No. SP</button>
                <a href="/cek-rencana-order"><button class="btn btn-primary text-white">Cek Rencana Order</button></a>
            </div>

            {{-- modal start --}}
            <div id="modal-setting-sp" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header text-lg font-bold  bg-primary flex align-center justify-center text-white">
                            Setting No. SP
                        </div>
                        <div class="modal-body p-5">
                            <div class="flex align-middle gap-5">
                                <p class="mt-2">XXXX</p>
                                <input type="text" class="form-control w-48">
                                <p class="mt-2">-</p>
                                <p class="mt-2">REG / MM-YY</p>
                            </div>
                            <div class="flex align-middle gap-5 mt-3">
                                <p class="mt-2">XXXX</p>
                                <input type="text" class="form-control w-48">
                                <p class="mt-2">-</p>
                                <p class="mt-2">OOT / MM-YY</p>
                            </div>
                            <div class="flex align-middle gap-5 mt-3">
                                <p class="mt-2">XXXX</p>
                                <input type="text" class="form-control w-48">
                                <p class="mt-2">-</p>
                                <p class="mt-2">Prek / MM-YY</p>
                            </div>
                            <div class="flex align-middle gap-5 mt-3">
                                <p class="mt-2">XXXX</p>
                                <input type="text" class="form-control w-48">
                                <p class="mt-2">-</p>
                                <p class="mt-2">Psiko / MM-YY</p>
                            </div>
                            <div class="flex align-middle gap-5 mt-3">
                                <p class="mt-2">XXXX</p>
                                <input type="text" class="form-control w-48">
                                <p class="mt-2">-</p>
                                <p class="mt-2">Narko / MM-YY</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-tw-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- modal end --}}

            <table class="table table-report -mt-2">
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
                        <td class="w-60 flex gap-2">
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
