@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Data Stok Opname
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="/tambah-stok-opname"><button class="btn btn-primary shadow-md mr-2">Tambah Data Stok Opname</button></a>
            <button class="btn btn-warning shadow-md mr-2" data-tw-toggle="modal" data-tw-target="#basic-modal-preview">Tambah
                Stok Masuk</button>
            <!-- BEGIN: Modal Content -->
            <div id="basic-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg rounded-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-primary flex align-center justify-center text-white">
                            <h2 class="text-lg font-bold">Stok Masuk</h2>
                        </div>
                        <div class="modal-body p-10">
                            <div class="preview">
                                <div data-tw-merge class="block sm:flex items-center mt-3">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                        Obat
                                    </label>
                                    <select data-tw-merge aria-label="Default select example" class="form-control">
                                        <option>- Pilih Jenis Obat -</option>
                                    </select>
                                </div>
                                <div data-tw-merge class="block sm:flex items-center mt-3">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                        Jenis Stok
                                    </label>
                                    <input data-tw-merge id="horizontal-form-1" type="text"
                                        placeholder="Stok dari master"
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                </div>
                                <div data-tw-merge class="block sm:flex items-center mt-3">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                        No. Batch
                                    </label>
                                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                </div>
                                <div data-tw-merge class="block sm:flex items-center mt-3">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                        Exp Date
                                    </label>
                                    <input data-tw-merge id="horizontal-form-1" type="date" placeholder=""
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                </div>
                                <div data-tw-merge class="block sm:flex items-center mt-3">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                        Satuan
                                    </label>
                                    <select data-tw-merge aria-label="Default select example" class="form-control">
                                        <option>- Pilih Satuan -</option>
                                    </select>
                                </div>
                                <div data-tw-merge class="block sm:flex items-center mt-3">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                        Isi Satuan
                                    </label>
                                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                </div>
                                <div data-tw-merge class="block sm:flex items-center mt-3">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                        Ket. Satuan
                                    </label>
                                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                </div>
                                <div data-tw-merge class="block sm:flex items-center mt-3">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                        HPP
                                    </label>
                                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                </div>
                                <div data-tw-merge class="block sm:flex items-center mt-3">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                        Stok Tercatat
                                    </label>
                                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                </div>
                                <div data-tw-merge class="block sm:flex items-center mt-3">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                        Stok Real
                                    </label>
                                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                </div>
                                <div data-tw-merge class="block sm:flex items-center mt-3">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                        Gudang
                                    </label>
                                    <select data-tw-merge aria-label="Default select example" class="form-control">
                                        <option>- Pilih Gudang -</option>
                                    </select>
                                </div>
                                <div data-tw-merge class="block sm:flex items-center mt-3">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                        Rak
                                    </label>
                                    <select data-tw-merge aria-label="Default select example" class="form-control">
                                        <option>- Pilih Rak -</option>
                                    </select>
                                </div>
                                <div data-tw-merge class="block sm:flex items-center mt-3">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                        Sub Rak
                                    </label>
                                    <select data-tw-merge aria-label="Default select example" class="form-control">
                                        <option>- Pilih Sub Rak -</option>
                                    </select>
                                </div>
                                <div data-tw-merge class="block sm:flex items-center mt-3">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                        Keterangan
                                    </label>
                                    <textarea name="" id="" rows="3" class="form-control"></textarea>
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
            <div data-tw-merge class="block sm:flex items-center ml-5">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-24">
                    Gudang
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
            </div>
            <div data-tw-merge class="block sm:flex items-center ml-5">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-20">
                    Rak
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
            </div>
            <div data-tw-merge class="block sm:flex items-center ml-5">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-32">
                    Sub Rak
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
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <div class="w-56 relative text-slate-500 mt-5">
            <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
            <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
        </div>
        <div class="intro-y box mt-5">
            <div class="overflow-x-auto">
                <table class="table mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">No</th>
                            <th class="whitespace-nowrap">Tgl SO</th>
                            <th class="whitespace-nowrap">Nama Obat/Barang</th>
                            <th class="whitespace-nowrap">No. Batch</th>
                            <th class="whitespace-nowrap">Exp. Date</th>
                            <th class="whitespace-nowrap">Stok Tercatat</th>
                            <th class="whitespace-nowrap">Stok Real</th>
                            <th class="whitespace-nowrap">Selisih Stok</th>
                            <th class="whitespace-nowrap">Nominal Selisih</th>
                            <th class="whitespace-nowrap">Keterangan</th>
                            <th class="whitespace-nowrap">Gudang</th>
                            <th class="whitespace-nowrap">Rak</th>
                            <th class="whitespace-nowrap">Sub Rak</th>
                            <th class="whitespace-nowrap">Ket Satuan</th>
                            <th class="whitespace-nowrap">Jenis</th>
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
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                        </tr>
                        <tr>
                            <td colspan="15" class="font-bold text-center">Total</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
