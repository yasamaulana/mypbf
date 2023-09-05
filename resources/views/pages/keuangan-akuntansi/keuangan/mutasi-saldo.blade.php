@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Data Mutasi Saldo
        </h2>
        <button class="btn btn-primary" data-tw-toggle="modal" data-tw-target="#tambah-mutasi">Tambah +</button>
    </div>

    {{-- modal start --}}
    <div id="tambah-mutasi" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header text-lg font-bold  bg-primary flex align-center justify-center text-white">
                    Detail Mutasi Saldo
                </div>
                <div class="modal-body p-5">
                    <div class="overflow-auto">
                        <div class="flex gap-3 w-full justify-center">
                            <div data-tw-merge class="block flex gap-2 items-center mt-3 mb-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-32">
                                    No. Reff
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block flex gap-2 items-center mt-3 mb-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-32">
                                    Tanggal
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="date" placeholder=""
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                        </div>
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th class="border border-slate-600">Akun Pengirim</th>
                                    <th class="border border-slate-600">Jumlah Saldo</th>
                                    <th class="border border-slate-600">Akun Penerima</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-slate-600">
                                        <div class="flex gap-2 w-full">
                                            <select data-tw-merge aria-label="Default select example" class="form-control">
                                                <option>- Pilih -</option>
                                                <option>Supri</option>
                                                <option>Ahmad</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td class="border border-slate-600">
                                        <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                    </td>
                                    <td class="border border-slate-600">
                                        <div class="flex gap-2 w-full">
                                            <select data-tw-merge aria-label="Default select example" class="form-control">
                                                <option>- Pilih -</option>
                                                <option>Supri</option>
                                                <option>Ahmad</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-3 sm:w-32">
                            Keterangan
                        </label>
                        <textarea data-tw-merge id="horizontal-form-1" type="date" placeholder="" rows="5"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-tw-dismiss="modal">Batal</button>
                    <button class="btn btn-warning">Cetak</button>
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    {{-- modal end --}}

    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <div class="flex gap-3 mb-3 justify-end">
                <div class="w-56 relative text-slate-500 mr-auto">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                </div>
            </div>
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">No</th>
                        <th class="whitespace-nowrap">No. Reff</th>
                        <th class="whitespace-nowrap">Tanggal</th>
                        <th class="whitespace-nowrap">Akun Pengirim</th>
                        <th class="whitespace-nowrap">Jumlah Saldo Mutasi</th>
                        <th class="whitespace-nowrap">Akun Penerima</th>
                        <th class="whitespace-nowrap">Keterangan</th>
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
                        <td class="">
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
    </div>
@endsection
