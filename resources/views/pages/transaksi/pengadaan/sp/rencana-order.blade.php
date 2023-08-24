@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Data Rencana Order
        </h2>
        <div data-tw-merge class="flex items-center">
            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-52">
                Cari Suplier
            </label>
            <select data-tw-merge aria-label="Default select example" class="tom-select w-full">
                <option>- Pilih -</option>
                <option>Supri</option>
                <option>Ahmad</option>
            </select>
        </div>
    </div>

    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible mt-5">
        <div class="box p-2">
            <div class="flex gap-3 mb-3 justify-end">
                <div class="w-56 relative text-slate-500 mr-auto border border-slate-600">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                </div>
                <button class="btn btn-warning text-white" data-tw-toggle="modal" data-tw-target="#buat-sp">Buat SP
                    +</button>
                <button class="btn btn-success text-white" data-tw-toggle="modal" data-tw-target="#tambah-produk">Tambah
                    Produk +</button>
            </div>

            {{-- modal buat sp --}}
            <div id="buat-sp" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header text-lg font-bold  bg-primary flex align-center justify-center text-white">
                            Nama Suplier PT ABC
                        </div>
                        <div class="modal-body p-5">
                            <div data-tw-merge class="flex items-center">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-32">
                                    Tgl SP
                                </label>
                                <input type="date" name="" id="" class="form-control w-52">
                            </div>
                            <div data-tw-merge class="flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-32">
                                    No Sp
                                </label>
                                <input type="text" name="" id="" class="form-control w-52">
                                <input data-tw-merge type="checkbox"
                                    class="transition-all ml-3 duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                    id="checkbox-switch-6" value="" />
                            </div>
                            <div data-tw-merge class="flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-32">
                                    No Sp
                                </label>
                                <select data-tw-merge aria-label="Default select example" class="form-control w-52">
                                    <option>- Pilih -</option>
                                    <option>Supri</option>
                                    <option>Ahmad</option>
                                </select>
                            </div>
                            <div class="overflow-auto">
                                <table class="table mt-3">
                                    <thead>
                                        <tr>
                                            <td class="border border-slate-600">No</td>
                                            <td class="border border-slate-600">Nama Obat/Barang</td>
                                            <td class="border border-slate-600">Golongan</td>
                                            <td class="border border-slate-600">Jumalah Order</td>
                                            <td class="border border-slate-600">Satuan</td>
                                            <td class="border border-slate-600">Keterangan</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border border-slate-600">1</td>
                                            <td class="border border-slate-600">Abajos</td>
                                            <td class="border border-slate-600"></td>
                                            <td class="border border-slate-600">5</td>
                                            <td class="border border-slate-600">Box</td>
                                            <td class="border border-slate-600">Segera</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-slate-600">2</td>
                                            <td class="border border-slate-600">Amoxan Tab</td>
                                            <td class="border border-slate-600"></td>
                                            <td class="border border-slate-600">2</td>
                                            <td class="border border-slate-600">Box</td>
                                            <td class="border border-slate-600">Ok</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="font-bold border border-slate-600">Jumlah Item : 2
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
            {{-- end modal buat sp --}}
            {{-- modal tambah produk --}}
            <div id="tambah-produk" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header text-lg font-bold  bg-primary flex align-center justify-center text-white">
                            Tambah Produk Ke (Nama Suplier)
                        </div>
                        <div class="modal-body p-5">
                            <div data-tw-merge class="flex items-center">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-32">
                                    Obat/Barang
                                </label>
                                <select data-tw-merge aria-label="Default select example" class="form-control ">
                                    <option>- Pilih -</option>
                                    <option>Supri</option>
                                    <option>Ahmad</option>
                                </select>
                            </div>
                            <div data-tw-merge class="flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-32">
                                    Satuan Beli
                                </label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                            <div data-tw-merge class="flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-32">
                                    Isi
                                </label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                            <div data-tw-merge class="flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-32">
                                    Sat Terkecil
                                </label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                            <div data-tw-merge class="flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-32">
                                    Stok Tersedia
                                </label>
                                <input type="text" name="" id="" class="form-control"
                                    placeholder="Satuan Terkecil">
                            </div>
                            <div data-tw-merge class="flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-32">
                                    Stok Min
                                </label>
                                <input type="text" name="" id="" class="form-control"
                                    placeholder="Satuan Terkecil">
                            </div>
                            <div data-tw-merge class="flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-32">
                                    Golongan
                                </label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                            <div data-tw-merge class="flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-32">
                                    Tipe
                                </label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                            <div data-tw-merge class="flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-32">
                                    Jumlah Order
                                </label>
                                <input type="text" name="" id="" class="form-control"
                                    placeholder="Satuan Beli">
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

            <p class="p-2 bg-primary text-white font-bold">Nama Suplier (Pt ABC)</p>
            <table class="table mt-2">
                <thead>
                    <tr>
                        <th class="border border-slate-600 text-center">
                            <input data-tw-merge type="checkbox"
                                class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                id="checkbox-switch-6" value="" />
                        </th>
                        <th class="border border-slate-600">Nama Obat/Barang</th>
                        <th class="border border-slate-600">Golongan</th>
                        <th class="border border-slate-600">Jumlah Order</th>
                        <th class="border border-slate-600">Keterangan</th>
                        <th class="border border-slate-600">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="intro-x">
                        <td class="border border-slate-600 text-center">
                            <input data-tw-merge type="checkbox"
                                class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                id="checkbox-switch-6" value="" />
                        </td>
                        <td class="border border-slate-600">Abajos</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">5</td>
                        <td class="border border-slate-600">Segera</td>
                        <td class="border border-slate-600">
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr class="intro-x">
                        <td class="border border-slate-600 text-center">
                            <input data-tw-merge type="checkbox"
                                class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                id="checkbox-switch-6" value="" />
                        </td>
                        <td class="border border-slate-600">Amoxan Tabs</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">2</td>
                        <td class="border border-slate-600">ok</td>
                        <td class="border border-slate-600">
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6">Jumlah Item Terpilih : 2</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END: Data List -->
@endsection
