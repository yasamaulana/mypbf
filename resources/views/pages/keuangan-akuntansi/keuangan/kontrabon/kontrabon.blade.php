@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Daftar Tagihan
        </h2>
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <div class="sm:flex gap-3 justify-between">
                <div class="mr-auto">
                    <a href="/tambah-kontrabon"><button class="btn btn-primary">Tambah +</button></a>
                </div>
                <div data-tw-merge class="block flex gap-2 items-center">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-32">
                        Filter
                    </label>
                    <select data-tw-merge aria-label="Default select example" class="form-control">
                        <option>- Pilih -</option>
                        <option>Box</option>
                        <option>Botol</option>
                    </select>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
            </div>
            <table class="table table-report mt-5">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">Tanggal</th>
                        <th class="whitespace-nowrap">No. Reff</th>
                        <th class="whitespace-nowrap">Kolektor</th>
                        <th class="whitespace-nowrap">Area Rayon</th>
                        <th class="whitespace-nowrap">Total Piutang</th>
                        <th class="whitespace-nowrap">Keterangan</th>
                        <th class="whitespace-nowrap">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="intro-x">
                        <td class="border border-slate-600 ">1</td>
                        <td class="border border-slate-600 ">Contoh Data</td>
                        <td class="border border-slate-600 ">Contoh Data</td>
                        <td class="border border-slate-600 ">Contoh Data</td>
                        <td class="border border-slate-600 ">Contoh Data</td>
                        <td class="border border-slate-600 ">Contoh Data</td>
                        <td class="border border-slate-600 flex gap-2">
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                            <button class="btn btn-warning">Cetak</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-slate-600 font-bold text-center" colspan="5">Total</td>
                        <td class="border border-slate-600 font-bold "></td>
                        <td class="border border-slate-600 font-bold "></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
    </div>
@endsection
