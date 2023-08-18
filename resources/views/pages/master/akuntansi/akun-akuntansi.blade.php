@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Data Akun Akuntansi
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal" data-tw-target="#basic-modal-preview">Tambah
                Data +</button>
            <button class="text-white btn btn-success shadow-md mr-2" data-tw-toggle="modal"
                data-tw-target="#tampil-jenis-akun">Tampil
                Jenis Akun</button>
            <!-- BEGIN: tambah data -->
            <div id="basic-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header bg-primary flex align-center justify-center text-white">
                            <h2 class="text-lg font-bold">Akun Akuntansi</h2>
                        </div>
                        <div class="modal-body p-10">
                            <div class="preview">
                                <div data-tw-merge class="block sm:flex items-center mt-3">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-32">
                                        Jenis Akun
                                    </label>
                                    <select data-tw-merge aria-label="Default select example"
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 mt-2 sm:mr-2 mt-2 sm:mr-2">
                                        <option>Akun Super</option>
                                        <option>Akun Middle</option>
                                    </select>
                                </div>
                                <div data-tw-merge class="block sm:flex items-center mt-3">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-32">
                                        Kode Akun
                                    </label>
                                    <input data-tw-merge id="horizontal-form-1" type="text"
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                </div>
                                <div data-tw-merge class="block sm:flex items-center mt-3">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-32">
                                        Nama Akun
                                    </label>
                                    <input data-tw-merge id="horizontal-form-1" type="text"
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                </div>
                            </div>
                        </div>
                        {{-- footer --}}
                        <div class="modal-footer">
                            <button class="btn btn-primary mt-5">Simpan Akun</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: tambah data -->
            <!-- BEGIN: tampil jenis akun -->
            <div id="tampil-jenis-akun" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-body p-10">
                            <table class="table border border-slate-600">
                                <thead>
                                    <tr>
                                        <td class="border border-slate-600">Kode</td>
                                        <td class="border border-slate-600">Jenis Akun</td>
                                        <td class="border border-slate-600">Debet</td>
                                        <td class="border border-slate-600">Kredit</td>
                                        <td class="border border-slate-600">Laporan</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border border-slate-600">1-0000</td>
                                        <td class="border border-slate-600">Aktiva</td>
                                        <td class="border border-slate-600 text-lg text-center">+</td>
                                        <td class="border border-slate-600 text-lg text-center">-</td>
                                        <td class="border border-slate-600">Neraca</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-slate-600">2-0000</td>
                                        <td class="border border-slate-600">Kewajiban</td>
                                        <td class="border border-slate-600 text-lg text-center">-</td>
                                        <td class="border border-slate-600 text-lg text-center">+</td>
                                        <td class="border border-slate-600">Neraca</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-slate-600">3-0000</td>
                                        <td class="border border-slate-600">Modal</td>
                                        <td class="border border-slate-600 text-lg text-center">-</td>
                                        <td class="border border-slate-600 text-lg text-center">+</td>
                                        <td class="border border-slate-600">Neraca</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-slate-600">4-0000</td>
                                        <td class="border border-slate-600">Pendapatan</td>
                                        <td class="border border-slate-600 text-lg text-center">-</td>
                                        <td class="border border-slate-600 text-lg text-center">+</td>
                                        <td class="border border-slate-600">Laba/Rugi</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-slate-600">5-0000</td>
                                        <td class="border border-slate-600">HPP</td>
                                        <td class="border border-slate-600 text-lg text-center">+</td>
                                        <td class="border border-slate-600 text-lg text-center">-</td>
                                        <td class="border border-slate-600">Laba/Rugi</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-slate-600">6-0000</td>
                                        <td class="border border-slate-600">Biaya</td>
                                        <td class="border border-slate-600 text-lg text-center">+</td>
                                        <td class="border border-slate-600 text-lg text-center">-</td>
                                        <td class="border border-slate-600">Laba/Rugi</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-slate-600">7-0000</td>
                                        <td class="border border-slate-600">Pendapatan Lain</td>
                                        <td class="border border-slate-600 text-lg text-center">-</td>
                                        <td class="border border-slate-600 text-lg text-center">+</td>
                                        <td class="border border-slate-600">Laba/Rugi</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-slate-600">8-0000</td>
                                        <td class="border border-slate-600">Biaya Lain</td>
                                        <td class="border border-slate-600 text-lg text-center">+</td>
                                        <td class="border border-slate-600 text-lg text-center">-</td>
                                        <td class="border border-slate-600">Laba/Rugi</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: tampil jenis akun -->

            <div class="w-56 relative text-slate-500 ">
                <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">Kode</th>
                        <th class="whitespace-nowrap">Nama Akun</th>
                        <th class="whitespace-nowrap">Jenis</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="intro-x">
                        <td class="w-40">1</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square"
                                        class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                    data-tw-target="#delete-confirmation-modal"> <i data-feather="trash-2"
                                        class="w-4 h-4 mr-1"></i> Delete </a>
                                <!-- BEGIN: Delete Confirmation Modal -->
                                <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <div class="p-5 text-center">
                                                    <i data-feather="x-circle"
                                                        class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                                    <div class="text-3xl mt-5">Are you sure?</div>
                                                    <div class="text-slate-500 mt-2">
                                                        Do you really want to delete these records?
                                                        <br>
                                                        This process cannot be undone.
                                                    </div>
                                                </div>
                                                <div class="px-5 pb-8 text-center">
                                                    <button type="button" data-tw-dismiss="modal"
                                                        class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                                    <button type="button" class="btn btn-danger w-24">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Delete Confirmation Modal -->
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
    </div>
@endsection
