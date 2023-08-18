@extends('layout.main')

@section('main')
    <div class="intro-y flex justify-between mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Tambah Saldo Awal
        </h2>
        <h2 class="font-medium bg-primary p-3 text-white rounded-lg w-64 text-center">
            Tanggal Saldo Awal: 8-10-2023
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="/saldo-awal"><button class="btn btn-secondary mr-2"><i data-feather="corner-up-left"
                        class="w-4 h-4 mr-1"></i>
                    Kembali</button></a>
            <button class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal"
                data-tw-target="#basic-modal-preview">Tambah
                Data +</button>
            <!-- BEGIN: Modal Content -->
            <div id="basic-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl rounded-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-primary flex align-center justify-center text-white">
                            <h2 class="text-lg font-bold">Entri Saldo</h2>
                        </div>
                        <div class="modal-body p-10">
                            <div class="preview">
                                <div data-tw-merge class="block sm:flex items-center mt-3">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                        Akun
                                    </label>
                                    <select data-tw-merge aria-label="Default select example" class="form-control">
                                        <option>- Pilih -</option>
                                        <option>Akun New</option>
                                    </select>
                                </div>
                                <div data-tw-merge class="block sm:flex items-center mt-3">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                        Saldo
                                    </label>
                                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                </div>
                                <div data-tw-merge class="block sm:flex items-center mt-3">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                        Tipe Saldo
                                    </label>
                                    <select data-tw-merge aria-label="Default select example" class="form-control">
                                        <option>- Pilih -</option>
                                        <option>Pasiva</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- footer --}}
                        <div class="modal-footer">
                            <button class="btn btn-secondari mt-5" data-tw-dismiss="modal">Batal</button>
                            <button class="btn btn-primary mt-5">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Modal Content -->

            <div class="w-56 relative text-slate-500 ">
                <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
            </div>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible mt-5">
        <div class="overflow-x-auto">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">No.</th>
                        <th class="whitespace-nowrap">Nama Akun</th>
                        <th class="whitespace-nowrap">Saldo Sebelum</th>
                        <th class="whitespace-nowrap">Saldo Sesudah</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="intro-x">
                        <td class="w-40">1</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="">Contoh Data</td>
                        <td class="table-report__action w-72">
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
            <div class="mt-5 flex justify-end gap-3">
                <button class="btn btn-secondary px-10" data-tw-toggle="modal"
                    data-tw-target="#cancel-confirmation-modal">Batal</button>
                <button class="btn btn-primary px-10">Simpan</button>

                <!-- BEGIN: Delete Confirmation Modal -->
                <div id="cancel-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="p-5 text-center">
                                    <i data-feather="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                    <div class="text-3xl mt-5">Yakin Kembali?</div>
                                    <div class="text-slate-500 mt-2">
                                        Perubahan tidak akan disimpan
                                    </div>
                                </div>
                                <div class="px-5 pb-8 text-center">
                                    <button type="button" data-tw-dismiss="modal"
                                        class="btn btn-outline-secondary w-24 mr-1">Kembali</button>
                                    <button type="button" class="btn btn-danger w-24">Batalkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Delete Confirmation Modal -->
            </div>
        </div>
    </div>
    <!-- END: Data List -->
    </div>
@endsection
