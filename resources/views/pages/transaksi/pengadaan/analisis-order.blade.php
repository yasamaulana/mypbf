@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Analisis Order
        </h2>
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2 gap-2">
            <div data-tw-merge class="block sm:flex items-center gap-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-20">
                    Analisis
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
            </div>
            <div data-tw-merge class="block sm:flex items-center gap-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-32">
                    Obat/Barang
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
            </div>
            <div data-tw-merge class="block sm:flex items-center gap-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-40">
                    Status Stok
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
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
                <button class="btn btn-success text-white">Kirim Ke Defecta</button>
            </div>
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">Kode</th>
                        <th class="whitespace-nowrap">Nama Obat/Barang</th>
                        <th class="whitespace-nowrap">Satuan Beli</th>
                        <th class="whitespace-nowrap">Isi</th>
                        <th class="whitespace-nowrap">Satuan Terkecil</th>
                        <th class="whitespace-nowrap">Stok Tersedia</th>
                        <th class="whitespace-nowrap">Stok Terjual</th>
                        <th class="whitespace-nowrap">Stok Ideal Perbulan</th>
                        <th class="whitespace-nowrap">Status</th>
                        <th class="whitespace-nowrap">Golongan</th>
                        <th class="whitespace-nowrap">Tipe</th>
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
                        <td class="text-danger">Over Stok</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="table-report__action">
                            <input data-tw-merge type="checkbox"
                                class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                id="checkbox-switch-1" value="" />
                        </td>
                    </tr>
                    <tr class="intro-x">
                        <td class="">1</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="text-success">Ideal Stok</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="table-report__action">
                            <input data-tw-merge type="checkbox"
                                class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                id="checkbox-switch-1" value="" />
                        </td>
                    </tr>
                    <tr class="intro-x">
                        <td class="">1</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="text-warning">Under Stok</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="table-report__action">
                            <input data-tw-merge type="checkbox"
                                class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                id="checkbox-switch-1" value="" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
    </div>
@endsection
