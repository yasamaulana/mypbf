@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <a href="/stok-opname"><button class="btn btn-secondary mr-2"><i data-feather="corner-up-left" class="w-4 h-4 mr-1"></i>
                Kembali</button></a>
        <h2 class="text-lg font-medium mr-auto">
            Tambah Data Stok Opname
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 gap-4 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <div data-tw-merge class="block sm:flex items-center">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-24">
                    Gudang
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
            </div>
            <div data-tw-merge class="block sm:flex items-center">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-20">
                    Rak
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
            </div>
            <div data-tw-merge class="block sm:flex items-center">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-32">
                    Sub Rak
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
            </div>
            <div data-tw-merge class="block sm:flex items-center">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-20">
                    Jenis
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
            </div>
            <div class="">
                <button class="btn btn-primary">Tampilkan</button>
                <button class="btn btn-warning text-white">Atur Ulang</button>
            </div>
        </div>
    </div>
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <div class="intro-y box mt-5">
            <div
                class="flex flex-col sm:flex-row items-center p-2 border-b bg-primary border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto text-white">
                    Stok Dari Pembelian
                </h2>
                <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                    <div class="w-56 relative text-slate-500 ">
                        <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="table mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">Nama Obat Barang</th>
                            <th class="whitespace-nowrap">No. Batch</th>
                            <th class="whitespace-nowrap">Exp. Date</th>
                            <th class="whitespace-nowrap">Stok</th>
                            <th class="whitespace-nowrap">Satuan Terkecil</th>
                            <th class="whitespace-nowrap">Jenis</th>
                            <th class="whitespace-nowrap">Gudang</th>
                            <th class="whitespace-nowrap">Rak</th>
                            <th class="whitespace-nowrap">Sub Rak</th>
                            <th class="whitespace-nowrap">Keterangan</th>
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
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center text-success" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#cetak-kartu-stok"> <i data-feather="file-minus"
                                            class="w-4 h-4 mr-1"></i> Stok Opname </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="intro-y box mt-5">
            <div
                class="flex flex-col sm:flex-row items-center p-2 border-b bg-primary border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto text-white">
                    Stok Awal
                </h2>
                <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                    <div class="w-56 relative text-slate-500 ">
                        <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="table mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">Nama Obat Barang</th>
                            <th class="whitespace-nowrap">No. Batch</th>
                            <th class="whitespace-nowrap">Exp. Date</th>
                            <th class="whitespace-nowrap">Stok</th>
                            <th class="whitespace-nowrap">Satuan Terkecil</th>
                            <th class="whitespace-nowrap">Jenis</th>
                            <th class="whitespace-nowrap">Gudang</th>
                            <th class="whitespace-nowrap">Rak</th>
                            <th class="whitespace-nowrap">Sub Rak</th>
                            <th class="whitespace-nowrap">Keterangan</th>
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
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center text-success" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#cetak-kartu-stok"> <i data-feather="file-minus"
                                            class="w-4 h-4 mr-1"></i> Stok Opname </a>
                                    <!-- BEGIN: stok kartu Modal -->
                                    <div id="cetak-kartu-stok" class="modal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="modal-body px-5">
                                                        <div class="preview">
                                                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                                                <label data-tw-merge for="horizontal-form-1"
                                                                    class="inline-block mb-2  sm:w-60">
                                                                    Nama Obat/Barang
                                                                </label>
                                                                <input data-tw-merge id="horizontal-form-1" type="text"
                                                                    placeholder=""
                                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                                            </div>
                                                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                                                <label data-tw-merge for="horizontal-form-1"
                                                                    class="inline-block mb-2  sm:w-60">
                                                                    Jenis
                                                                </label>
                                                                <input data-tw-merge id="horizontal-form-1" type="text"
                                                                    placeholder=""
                                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                                            </div>
                                                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                                                <label data-tw-merge for="horizontal-form-1"
                                                                    class="inline-block mb-2  sm:w-60">
                                                                    No. Batch
                                                                </label>
                                                                <input data-tw-merge id="horizontal-form-1" type="text"
                                                                    placeholder=""
                                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                                            </div>
                                                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                                                <label data-tw-merge for="horizontal-form-1"
                                                                    class="inline-block mb-2  sm:w-60">
                                                                    Exp. Date
                                                                </label>
                                                                <input data-tw-merge id="horizontal-form-1" type="text"
                                                                    placeholder=""
                                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                                            </div>
                                                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                                                <label data-tw-merge for="horizontal-form-1"
                                                                    class="inline-block mb-2  sm:w-60">
                                                                    Stok Tercatat
                                                                </label>
                                                                <input data-tw-merge id="horizontal-form-1" type="text"
                                                                    placeholder=""
                                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                                            </div>
                                                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                                                <label data-tw-merge for="horizontal-form-1"
                                                                    class="inline-block mb-2  sm:w-60">
                                                                    Stok Real
                                                                </label>
                                                                <input data-tw-merge id="horizontal-form-1" type="text"
                                                                    placeholder=""
                                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                                            </div>
                                                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                                                <label data-tw-merge for="horizontal-form-1"
                                                                    class="inline-block mb-2  sm:w-60">
                                                                    Satuan Terkecil
                                                                </label>
                                                                <input data-tw-merge id="horizontal-form-1" type="text"
                                                                    placeholder=""
                                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                                            </div>
                                                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                                                <label data-tw-merge for="horizontal-form-1"
                                                                    class="inline-block mb-2  sm:w-60">
                                                                    Gudang
                                                                </label>
                                                                <input data-tw-merge id="horizontal-form-1" type="text"
                                                                    placeholder=""
                                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                                            </div>
                                                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                                                <label data-tw-merge for="horizontal-form-1"
                                                                    class="inline-block mb-2  sm:w-60">
                                                                    Rak
                                                                </label>
                                                                <input data-tw-merge id="horizontal-form-1" type="text"
                                                                    placeholder=""
                                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                                            </div>
                                                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                                                <label data-tw-merge for="horizontal-form-1"
                                                                    class="inline-block mb-2  sm:w-60">
                                                                    Sub Rak
                                                                </label>
                                                                <input data-tw-merge id="horizontal-form-1" type="text"
                                                                    placeholder=""
                                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary"
                                                        data-tw-dismiss="modal">Batal</button>
                                                    <button class="btn btn-primary">Simpan Perubahan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: stok kartu Modal -->
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END: Data List -->
    </div>
@endsection
