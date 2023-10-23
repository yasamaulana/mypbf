@extends('layout.main')

@section('main')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Piutang Awal Akir
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-nowrap">
            <button class="mr-2 shadow-md btn btn-primary" data-tw-toggle="modal" data-tw-target="#basic-modal-preview">Tambah
                Piutang</button>
            <!-- BEGIN: Modal Content -->
            <div id="basic-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                <div class="rounded-lg modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="flex justify-center text-white modal-header bg-primary align-center">
                            <h2 class="text-lg font-bold">Piutang Awal</h2>
                        </div>
                        <div class="p-10 modal-body">
                            <div class="preview">
                                <div data-tw-merge class="items-center block mt-3 sm:flex">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                        No. Reff
                                    </label>
                                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder="Auto"
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                </div>
                                <div data-tw-merge class="items-center block mt-3 sm:flex">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                        Tgl. Faktur
                                    </label>
                                    <input data-tw-merge id="horizontal-form-1" type="date" placeholder="Auto"
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                </div>
                                <div data-tw-merge class="items-center block mt-3 sm:flex">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                        Pelanggan
                                    </label>
                                    <select data-tw-merge aria-label="Default select example" class="form-control">
                                        <option>- Pilih -</option>
                                        <option>Supri</option>
                                        <option>Ahmad</option>
                                    </select>
                                </div>
                                <div data-tw-merge class="items-center block mt-3 sm:flex">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                        Tgl. Jatuh tempo
                                    </label>
                                    <input data-tw-merge id="horizontal-form-1" type="date" placeholder="Auto"
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                </div>
                                <div data-tw-merge class="items-center block mt-3 sm:flex">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                        Jumlah Piutang
                                    </label>
                                    <input data-tw-merge id="horizontal-form-1" type="text"
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                </div>
                                <div data-tw-merge class="items-center block mt-3 sm:flex">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                        Jenis Piutang
                                    </label>
                                    <select data-tw-merge aria-label="Default select example" class="form-control">
                                        <option>- Pilih -</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- footer --}}
                        <div class="modal-footer">
                            <button class="mt-5 btn btn-secondari" data-tw-dismiss="modal">Batal</button>
                            <button class="mt-5 btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Modal Content -->

            <div class="relative w-56 text-slate-500 ">
                <input type="text" class="w-56 pr-10 form-control box" placeholder="Search...">
                <i class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3" data-feather="search"></i>
            </div>

            <div data-tw-merge class="items-center block ml-5 sm:flex">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 font-bold sm:w-20">
                    Jenis
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
            </div>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="col-span-12 mt-5 overflow-auto intro-y lg:overflow-visible">
        <table class="table -mt-2 table-report">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">No.</th>
                    <th class="whitespace-nowrap">No. Reff</th>
                    <th class="whitespace-nowrap">Tgl. Faktur</th>
                    <th class="whitespace-nowrap">Suplier</th>
                    <th class="whitespace-nowrap">Jatuh Tempo</th>
                    <th class="whitespace-nowrap">Jumlah Piutang</th>
                    <th class="whitespace-nowrap">Jenis Piutang</th>
                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <tr class="intro-x">
                    <td class="w-40">1</td>
                    <td class="">Contoh Data</td>
                    <td class="">Contoh Data</td>
                    <td class="">Contoh Data</td>
                    <td class="">Contoh Data</td>
                    <td class="">Contoh Data</td>
                    <td class="">Contoh Data</td>
                    <td class="w-56 table-report__action">
                        <div class="flex items-center justify-center">
                            <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square"
                                    class="w-4 h-4 mr-1"></i> Edit </a>
                            <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                data-tw-target="#delete-confirmation-modal"> <i data-feather="trash-2"
                                    class="w-4 h-4 mr-1"></i> Delete </a>
                            <!-- BEGIN: Delete Confirmation Modal -->
                            <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="p-0 modal-body">
                                            <div class="p-5 text-center">
                                                <i data-feather="x-circle" class="w-16 h-16 mx-auto mt-3 text-danger"></i>
                                                <div class="mt-5 text-3xl">Are you sure?</div>
                                                <div class="mt-2 text-slate-500">
                                                    Do you really want to delete these records?
                                                    <br>
                                                    This process cannot be undone.
                                                </div>
                                            </div>
                                            <div class="px-5 pb-8 text-center">
                                                <button type="button" data-tw-dismiss="modal"
                                                    class="w-24 mr-1 btn btn-outline-secondary">Cancel</button>
                                                <button type="button" class="w-24 btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Delete Confirmation Modal -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="font-bold text-center border border-slate-600">Jumlah</td>
                    <td colspan="5" class="font-bold border  border-slate-600">Rp.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- END: Data List -->
    </div>
@endsection
