@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Analisis Pareto ABC
        </h2>
        <button class="btn btn-warning" data-tw-toggle="modal" data-tw-target="#modal-informasi">Informasi</button>
    </div>

    {{-- modal start --}}
    <div id="modal-informasi" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body p-10">
                    <table class="table">
                        <thead>
                            <tr>
                                <td class="border border-slate-600 bg-danger text-white">Kelas</td>
                                <td class="border border-slate-600 bg-danger text-white">Jumlah Item</td>
                                <td class="border border-slate-600 bg-danger text-white">Nilai Penjualan
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-slate-600">A</td>
                                <td class="border border-slate-600">10% - 20%</td>
                                <td class="border border-slate-600">70% - 80%</td>
                            </tr>
                            <tr>
                                <td class="border border-slate-600">B</td>
                                <td class="border border-slate-600">10% - 20%</td>
                                <td class="border border-slate-600">15% - 20%</td>
                            </tr>
                            <tr>
                                <td class="border border-slate-600">C</td>
                                <td class="border border-slate-600">60% - 20%</td>
                                <td class="border border-slate-600">5% - 15%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- modal end --}}

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2 gap-3">
            <div data-tw-merge class="block sm:flex items-center">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-20">
                    Kelas
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
            </div>
            <div data-tw-merge class="block sm:flex items-center">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-20">
                    Tipe
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
            </div>
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
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <div class="flex gap-3 mb-3 justify-end">
                <div class="w-56 relative text-slate-500 mr-auto">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                </div>
                <button class="btn btn-success text-white">Kirim Ke Defecta</button>
            </div>
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">No</th>
                        <th class="whitespace-nowrap">Kode</th>
                        <th class="whitespace-nowrap">Nama Obat/Barang</th>
                        <th class="whitespace-nowrap">Satuan Terkecil</th>
                        <th class="whitespace-nowrap">Golongan</th>
                        <th class="whitespace-nowrap">Tipe</th>
                        <th class="whitespace-nowrap">Harga Jual</th>
                        <th class="whitespace-nowrap">Item Terjual</th>
                        <th class="whitespace-nowrap">Nilai Penjualan</th>
                        <th class="whitespace-nowrap">% Penjualan</th>
                        <th class="whitespace-nowrap">% Kumulatif</th>
                        <th class="whitespace-nowrap">Kelas</th>
                        <th class="whitespace-nowrap">
                            <input data-tw-merge type="checkbox"
                                class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                id="checkbox-switch-1" value="" />
                        </th>
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
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="table-report__action">
                            <input data-tw-merge type="checkbox"
                                class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                id="checkbox-switch-1" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="8" class="font-bold text-center">Total</td>
                        <td class="font-bold">Rp.</td>
                        <td class="font-bold">%</td>
                        <td colspan="3" class="font-bold"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
    </div>
@endsection
