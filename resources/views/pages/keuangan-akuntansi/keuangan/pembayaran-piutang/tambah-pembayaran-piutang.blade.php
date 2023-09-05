@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Detail Pembayaran Piutang
        </h2>
    </div>

    <div class="box p-5 mt-5">
        <div class="sm:grid grid-cols-2 gap-5">
            <div class="">
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Tanggal
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="date" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        No. Reff
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder="Auto"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                        Pelanggan
                    </label>
                    <div class="flex gap-2 w-full">
                        <select data-tw-merge aria-label="Default select example" class="form-control">
                            <option>- Pilih -</option>
                            <option>Supri</option>
                            <option>Ahmad</option>
                        </select>
                        <button data-tw-toggle="modal" data-tw-target="#cari-piutang" class="btn btn-success">Cari</button>
                        <button data-tw-toggle="modal" data-tw-target="#cari-tagihan" class="btn btn-warning">Cari</button>
                    </div>
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                        Akun Bayar
                    </label>
                    <div class="flex gap-2 w-full">
                        <select data-tw-merge aria-label="Default select example" class="form-control">
                            <option>- Pilih -</option>
                            <option>Supri</option>
                            <option>Ahmad</option>
                        </select>
                    </div>
                </div>
            </div>
            <div data-tw-merge class="block mt-2 items-center">
                <div data-tw-merge class="block items-center">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                        Keterangan
                    </label>
                    <textarea data-tw-merge id="horizontal-form-1" type="text" placeholder="" rows="7"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80"></textarea>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal cari-piutang --}}
    <div id="cari-piutang" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header text-lg font-bold  bg-primary flex align-center justify-center text-white">
                    Data Piutang (Nama Pelanggan)
                </div>
                <div class="modal-body p-5">
                    <div class="overflow-auto">
                        <div data-tw-merge class="block flex gap-2 items-center mt-3 mb-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-32">
                                Filter
                            </label>
                            <select data-tw-merge aria-label="Default select example" class="form-control">
                                <option>- Pilih -</option>
                                <option>Box</option>
                                <option>Botol</option>
                            </select>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="border border-slate-600">No</th>
                                    <th class="border border-slate-600">Tgl. Faktur</th>
                                    <th class="border border-slate-600">No. Faktur</th>
                                    <th class="border border-slate-600">Tgl. Jatuh Tempo</th>
                                    <th class="border border-slate-600">Total Piutang</th>
                                    <th class="border border-slate-600">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
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
                                <tr>
                                    <td colspan="4" class="border border-slate-600 text-center font-bold">Total</td>
                                    <td class="border border-slate-600 text-center font-bold"></td>
                                    <td class="border border-slate-600 text-center font-bold"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-tw-dismiss="modal">Batal</button>
                    <button class="btn btn-primary">Pilih</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal daftar --}}
    {{-- Modal cari-piutang --}}
    <div id="cari-tagihan" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header text-lg font-bold  bg-primary flex align-center justify-center text-white">
                    Data Tagihan (Nama Pelanggan)
                </div>
                <div class="modal-body p-5">
                    <div class="overflow-auto">
                        <div data-tw-merge class="block flex gap-2 items-center mt-3 mb-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-32">
                                Filter
                            </label>
                            <select data-tw-merge aria-label="Default select example" class="form-control">
                                <option>- Pilih -</option>
                                <option>Box</option>
                                <option>Botol</option>
                            </select>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="border border-slate-600">No</th>
                                    <th class="border border-slate-600">Tgl. Faktur</th>
                                    <th class="border border-slate-600">No. Faktur</th>
                                    <th class="border border-slate-600">Tgl. Jatuh Tempo</th>
                                    <th class="border border-slate-600">Total Piutang</th>
                                    <th class="border border-slate-600">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
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
                                <tr>
                                    <td colspan="4" class="border border-slate-600 text-center font-bold">Total</td>
                                    <td class="border border-slate-600 text-center font-bold"></td>
                                    <td class="border border-slate-600 text-center font-bold"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-tw-dismiss="modal">Batal</button>
                    <button class="btn btn-primary">Pilih</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal daftar --}}

    <div class="box p-5 mt-3">
        <div class="overflow-auto">
            <table class="table">
                <thead class="text-center font-bold">
                    <tr>
                        <th class="border border-slate-600">No</th>
                        <th class="border border-slate-600">No. Faktur</th>
                        <th class="border border-slate-600">Total Piutang</th>
                        <th class="border border-slate-600">Bayar</th>
                        <th class="border border-slate-600">Sisa</th>
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
                        <td class="border border-slate-600 flex gap-2">
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="border border-slate-600 text-center font-bold">Total</td>
                        <td class="border border-slate-600 text-center font-bold"></td>
                        <td class="border border-slate-600 text-center font-bold"></td>
                        <td class="border border-slate-600 text-center font-bold"></td>
                        <td class="border border-slate-600 text-center font-bold"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="flex gap-3 mt-5 justify-center">
        <button class="btn btn-primary px-10">Simpan</button>
        <button class="btn btn-warning px-10">Cetak</button>
        <a href="/pembayaran-piutang"><button class="btn btn-danger">Batal</button></a>
    </div>
@endsection
