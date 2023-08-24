@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Pembelian
        </h2>
    </div>
    <div class="sm:grid grid-cols-3 gap-4 mt-5">
        <div class="box p-5 drop-shadow">
            <div data-tw-merge class="block sm:flex items-center mt-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                    No. SP
                </label>
                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
            </div>
            <div data-tw-merge class="block sm:flex items-center mt-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                    Tgl. Input
                </label>
                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
            </div>
            <div data-tw-merge class="block sm:flex items-center mt-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                    Tgl. Faktur
                </label>
                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
            </div>
            <div class="mt-3">
                <div class="form-check form-switch">
                    <label class="form-check-label" for="checkbox-switch-7">Inc PPN</label>
                    <input id="checkbox-switch-7" class="form-check-input mx-3" type="checkbox">
                </div>
            </div>
        </div>
        <div class="text-center mb-5 mt-5">
            <label for="no-reff" class="form-label">No. Reff</label>
            <input type="text" class="form-control" name="" id="" placeholder="Auto">
        </div>
        <div class="box p-5">
            <div data-tw-merge class="block sm:flex items-center mt-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                    Suplier
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
            </div>
            <div data-tw-merge class="block sm:flex items-center mt-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                    No Fakturs
                </label>
                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
            </div>
            <div data-tw-merge class="block flex items-center mt-3 gap-2">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                    Kredit
                </label>
                <div class="form-check form-switch">
                    <input id="checkbox-switch-7" class="form-check-input mx-3" type="checkbox">
                </div>
                <div class="flex gap-2">
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="sm:w-20 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="sm:w-32 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-span-12 overflow-auto mt-5 lg:overflow-visible">
        <div class="sm:flex gap-3 mb-3 ">
            <div class="mr-auto">
                <button class="btn btn-primary" data-tw-toggle="modal" data-tw-target="#surat-pesanan">Surat
                    Pesanan</button>
                <button data-tw-toggle="modal" data-tw-target="#tambah-produk" class="btn btn-warning text-white">Tambah
                    Produk</button>
            </div>

            {{-- modal surat pesanan --}}
            <div id="surat-pesanan" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header text-lg font-bold  bg-primary flex align-center justify-center text-white">
                            Daftar Surat Pesanan
                        </div>
                        <div class="modal-body p-5">
                            <div class="overflow-auto">
                                <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 mb-3 sm:mt-0">
                                    <div class="w-56 relative text-slate-500 ">
                                        <input type="text" class="form-control w-56 pr-10" placeholder="Search...">
                                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"
                                            data-feather="search"></i>
                                    </div>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border border-slate-600">No</th>
                                            <th class="border border-slate-600">No Reff</th>
                                            <th class="border border-slate-600">Tgl. SP</th>
                                            <th class="border border-slate-600">Suplier</th>
                                            <th class="border border-slate-600">No. SP</th>
                                            <th class="border border-slate-600">Tipe SP</th>
                                            <th class="border border-slate-600">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border border-slate-600">1</td>
                                            <td class="border border-slate-600">Contoh Data</td>
                                            <td class="border border-slate-600">Contoh Data</td>
                                            <td class="border border-slate-600">Contoh Data</td>
                                            <td class="border border-slate-600">Contoh Data</td>
                                            <td class="border border-slate-600">Contoh Data</td>
                                            <td class="border border-slate-600">
                                                <input data-tw-merge type="checkbox"
                                                    class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                                    id="checkbox-switch-1" value="" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-tw-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end modal surat pesanan --}}
            {{-- modal tambah produk --}}
            <div id="tambah-produk" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div
                            class="modal-header text-lg font-bold  bg-primary flex align-center justify-center text-white">
                            Tambah Obat/Barang
                        </div>
                        <div class="modal-body p-5">
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Obat/Barang
                                </label>
                                <select data-tw-merge aria-label="Default select example" class="form-control">
                                    <option>- Pilih -</option>
                                    <option>Supri</option>
                                    <option>Ahmad</option>
                                </select>
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Satuan Beli
                                </label>
                                <select data-tw-merge aria-label="Default select example" class="form-control">
                                    <option>- Pilih -</option>
                                    <option>Supri</option>
                                    <option>Ahmad</option>
                                </select>
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Isi
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Sat Terkecil
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Qty Faktur
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder="Satuan Beli"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Harga
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder="Satuan Beli"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Disc 1
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Disc 2
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Total
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-tw-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end modal tambah produk --}}

            <div class="box">
                <p class="font-bold p-2  rounded-md">Total Hutang</p>
            </div>
        </div>
    </div>
    <div class="box overflow-auto mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th class="border border-slate-600">No</th>
                    <th class="border border-slate-600">Nama Obat/Barang</th>
                    <th class="border border-slate-600">Satuan</th>
                    <th class="border border-slate-600">Qty SP</th>
                    <th class="border border-slate-600">Qty Faktur</th>
                    <th class="border border-slate-600">Harga</th>
                    <th class="border border-slate-600">Disc 1</th>
                    <th class="border border-slate-600">Disc 2</th>
                    <th class="border border-slate-600">Total</th>
                    <th class="border border-slate-600">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-slate-600">1</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td class="border border-slate-600">2</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td class="border border-slate-600">3</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600 flex gap-2">
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="box p-5 mt-5">
        <div class="sm:grid grid-cols-2 gap-5">
            <div class="">
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Sub Total
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Disc
                    </label>
                    <div class="flex gap-2 w-full">
                        <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    </div>
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        DPP
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        PPN
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Biaya 1
                    </label>
                    <div class="flex gap-2 w-full">
                        <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        <select data-tw-merge aria-label="Default select example" class="form-control">
                            <option>- Pilih -</option>
                            <option>Supri</option>
                            <option>Ahmad</option>
                        </select>
                    </div>
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Biaya 2
                    </label>
                    <div class="flex gap-2 w-full">
                        <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        <select data-tw-merge aria-label="Default select example" class="form-control">
                            <option>- Pilih -</option>
                            <option>Supri</option>
                            <option>Ahmad</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="">
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Total Tagihan
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Akun Bayar
                    </label>
                    <select data-tw-merge aria-label="Default select example" class="form-control">
                        <option>- Pilih -</option>
                        <option>Supri</option>
                        <option>Ahmad</option>
                    </select>
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Jumlah Bayar
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        No Faktur Pajak
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Tgl Faktur Pajak
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Kompensasi Pajak
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="date" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
            </div>
        </div>
        <div data-tw-merge class="block sm:flex items-center mt-5">
            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-52">
                Keterangan
            </label>
            <textarea data-tw-merge id="horizontal-form-1" type="text" placeholder="" rows="4"
                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80"></textarea>
        </div>
        <div class="flex gap-2 mt-5 justify-center">
            <button class="btn px-10 btn-primary">Simpan</button>
            <button class="btn btn-danger mx-5">Batal</button>
        </div>
    </div>
@endsection
