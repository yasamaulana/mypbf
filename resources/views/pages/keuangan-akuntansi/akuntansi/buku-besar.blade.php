@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Data Buku Besar
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
                <div data-tw-merge class="block flex gap-2 items-center">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-28">
                        Akun
                    </label>
                    <select data-tw-merge aria-label="Default select example" class="form-control">
                        <option>- Pilih -</option>
                        <option>Box</option>
                        <option>Botol</option>
                    </select>
                </div>
                <div class="flex gap-2 mt-3 sm:mt-0">
                    <button class="btn btn-success text-white">Tampilkan</button>
                    <button class="btn btn-warning text-white">Setting</button>
                </div>
            </div>

            {{-- start Box --}}
            <div class="box mt-5 p-5">
                <div class="flex gap-3 mb-3 justify-between mt-5">
                    <p class=" mr-auto">Akun :</p>
                    <div class="w-56 relative text-slate-500">
                        <input type="text" class="form-control w-56 pr-10" placeholder="Search...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                    </div>
                </div>
                <div class="overflow-auto">
                    <table class="table">
                        <thead class="text-center font-bold">
                            <tr>
                                <th class="border border-slate-600">No. Reff</th>
                                <th class="border border-slate-600">Tanggal</th>
                                <th class="border border-slate-600">Keterangan</th>
                                <th class="border border-slate-600">Debet</th>
                                <th class="border border-slate-600">Kredit</th>
                                <th class="border border-slate-600">Saldo Akhir</th>
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
                            </tr>
                            <tr>
                                <td class="border border-slate-600 text-center font-bold" colspan="3">Total</td>
                                <td class="border border-slate-600"></td>
                                <td class="border border-slate-600"></td>
                                <td class="border border-slate-600"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- End box --}}
            {{-- start Box --}}
            <div class="box mt-5 p-5">
                <div class="flex gap-3 mb-3 justify-between mt-5">
                    <p class=" mr-auto">Akun :</p>
                    <div class="w-56 relative text-slate-500">
                        <input type="text" class="form-control w-56 pr-10" placeholder="Search...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                    </div>
                </div>
                <div class="overflow-auto">
                    <table class="table">
                        <thead class="text-center font-bold">
                            <tr>
                                <th class="border border-slate-600">No. Reff</th>
                                <th class="border border-slate-600">Tanggal</th>
                                <th class="border border-slate-600">Keterangan</th>
                                <th class="border border-slate-600">Debet</th>
                                <th class="border border-slate-600">Kredit</th>
                                <th class="border border-slate-600">Saldo Akhir</th>
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
                            </tr>
                            <tr>
                                <td class="border border-slate-600 text-center font-bold" colspan="3">Total</td>
                                <td class="border border-slate-600"></td>
                                <td class="border border-slate-600"></td>
                                <td class="border border-slate-600"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- End box --}}
            {{-- start Box --}}
            <div class="box mt-5 p-5">
                <div class="flex gap-3 mb-3 justify-between mt-5">
                    <p class=" mr-auto">Akun :</p>
                    <div class="w-56 relative text-slate-500">
                        <input type="text" class="form-control w-56 pr-10" placeholder="Search...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                    </div>
                </div>
                <div class="overflow-auto">
                    <table class="table">
                        <thead class="text-center font-bold">
                            <tr>
                                <th class="border border-slate-600">No. Reff</th>
                                <th class="border border-slate-600">Tanggal</th>
                                <th class="border border-slate-600">Keterangan</th>
                                <th class="border border-slate-600">Debet</th>
                                <th class="border border-slate-600">Kredit</th>
                                <th class="border border-slate-600">Saldo Akhir</th>
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
                            </tr>
                            <tr>
                                <td class="border border-slate-600 text-center font-bold" colspan="3">Total</td>
                                <td class="border border-slate-600"></td>
                                <td class="border border-slate-600"></td>
                                <td class="border border-slate-600"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- End box --}}
        </div>
        <!-- END: Data List -->
    </div>
@endsection
