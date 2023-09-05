@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Neraca Lajur
        </h2>
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <div class="sm:flex gap-3 justify-between">
                <div class="">
                    <div class="flex gap-2 overflow-auto mr-auto mb-2 sm:mb-0">
                        <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-20">
                            Tanggal
                        </label>
                        <input data-tw-merge id="horizontal-form-1" type="date" placeholder="Stok dari master"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        <p class="mt-3">s/d</p>
                        <input data-tw-merge id="horizontal-form-1" type="date" placeholder="Stok dari master"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    </div>
                </div>
                <div class="flex gap-2 mt-3 sm:mt-0">
                    <button class="btn btn-success text-white">Tampilkan</button>
                    <button class="btn btn-warning text-white">Setting</button>
                </div>
            </div>
            <div class="box mt-5">
                <div class="overflow-auto">
                    <table class="table">
                        <thead class="text-center font-bold">
                            <tr>
                                <th class="border border-slate-600" rowspan="2">Kode</th>
                                <th class="border border-slate-600" rowspan="2">Nama Akun</th>
                                <th class="border border-slate-600" colspan="2">Neraca Saldo</th>
                                <th class="border border-slate-600" colspan="2">Jurnal Penyesuaian</th>
                                <th class="border border-slate-600" colspan="2">Setelan Penyesuaian</th>
                                <th class="border border-slate-600" colspan="2">Laba/Rugi</th>
                                <th class="border border-slate-600" colspan="2">Neraca</th>
                            </tr>
                            <tr>
                                <th class="border border-slate-600">Debet</th>
                                <th class="border border-slate-600">Kredit</th>
                                <th class="border border-slate-600">Debet</th>
                                <th class="border border-slate-600">Kredit</th>
                                <th class="border border-slate-600">Debet</th>
                                <th class="border border-slate-600">Kredit</th>
                                <th class="border border-slate-600">Debet</th>
                                <th class="border border-slate-600">Kredit</th>
                                <th class="border border-slate-600">Debet</th>
                                <th class="border border-slate-600">Kredit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
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
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END: Data List -->
    </div>
@endsection
