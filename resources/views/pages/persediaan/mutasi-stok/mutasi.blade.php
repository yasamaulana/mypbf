@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Data Mutasi Stok
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="/data-mutasi-stok"><button class="btn btn-primary shadow-md mr-4">Tambah Mutasi Stok</button></a>

            <!-- END: Modal Content -->
            <div data-tw-merge class="block sm:flex items-center gap-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2">
                    Tanggal
                </label>
                <div class="flex gap-2">
                    <input data-tw-merge id="horizontal-form-1" type="date" placeholder="Stok dari master"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    <p class="mt-3">s/d</p>
                    <input data-tw-merge id="horizontal-form-1" type="date" placeholder="Stok dari master"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div class="">
                    <button class="btn btn-primary">Tampilkan</button>
                    <button class="btn btn-warning">Atur Ulang</button>
                </div>
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
                <table class="table">
                    <thead>
                        <tr>
                            <th rowspan="2" class="border border-slate-600">No Reff</th>
                            <th rowspan="2" class="border border-slate-600">Tanggal</th>
                            <th rowspan="2" class="border border-slate-600">Nama Produk</th>
                            <th rowspan="2" class="border border-slate-600">No Batch</th>
                            <th rowspan="2" class="border border-slate-600">Exp Date</th>
                            <th rowspan="2" class="border border-slate-600">Satuan Terkecil</th>
                            <th rowspan="2" class="border border-slate-600">Ket. Satuan</th>
                            <th rowspan="2" class="border border-slate-600">Jumlah</th>
                            <th colspan="3" class="border border-slate-600 text-center">Lokasi Sebelum</th>
                            <th colspan="3" class="border border-slate-600 text-center">Lokasi Sesudah</th>
                            <th rowspan="2" class="border border-slate-600">Keterangan</th>
                        </tr>
                        <tr>
                            <th class="border border-slate-600">Gudang</th>
                            <th class="border border-slate-600">Rak</th>
                            <th class="border border-slate-600">Sub Rak</th>
                            <th class="border border-slate-600">Gudang</th>
                            <th class="border border-slate-600">Rak</th>
                            <th class="border border-slate-600">Sub Rak</th>
                        </tr>
                    </thead>
                    @foreach ($stoks as $stok)
                        <tbody>
                            <tr class="intro-x">
                                <th class="border border-slate-600">{{ $stok->no_reff }}</th>
                                <td class="border border-slate-600">{{ $stok->exp_date }}</td>
                                <td class="border border-slate-600">{{ $stok->produk->nama_obat_barang }}</td>
                                <td class="border border-slate-600">{{ $stok->no_batch }}</td>
                                <td class="border border-slate-600">{{ $stok->exp_date }}</td>
                                <td class="border border-slate-600">{{ $stok->produk->satuan_jual_terkecil }}</td>
                                <td class="border border-slate-600">{{ $stok->produk->ket_satuan }}</td>
                                <td class="border border-slate-600">{{ $stok->produk->isi }}</td>
                                <td class="border border-slate-600">{{ $stok->gudang }}</td>
                                <td class="border border-slate-600">{{ $stok->rak }}</td>
                                <td class="border border-slate-600">{{ $stok->sub_rak }}</td>
                                <td class="border border-slate-600">{{ $stok->gudang }}</td>
                                <td class="border border-slate-600">{{ $stok->rak }}</td>
                                <td class="border border-slate-600">{{ $stok->sub_rak }}</td>
                                <td class="border border-slate-600">{{ $stok->produk->ket_satuan }}</td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
