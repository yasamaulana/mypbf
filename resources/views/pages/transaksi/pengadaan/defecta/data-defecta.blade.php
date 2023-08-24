@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Data Defecta
        </h2>
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <div class="flex gap-3 mb-3 justify-end">
                <div class="w-56 relative text-slate-500 mr-auto">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                </div>
                <button class="btn btn-success text-white">Export Excel</button>
            </div>
            <div class="intro-y box mt-5">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th rowspan="2" class="border border-slate-900">Kode Obat</th>
                            <th rowspan="2" class="border border-slate-900">Nama Obat</th>
                            <th rowspan="2" class="border border-slate-900">Satuan Beli</th>
                            <th rowspan="2" class="border border-slate-900">Isi</th>
                            <th rowspan="2" class="border border-slate-900">Satuan Terkecil</th>
                            <th rowspan="2" class="border border-slate-900">Stok Tersedia</th>
                            <th colspan="3" class="border border-slate-900">Stok (Saat Ini)</th>
                            <th rowspan="2" class="border border-slate-900">Status</th>
                            <th colspan="3" class="border border-slate-900">Sumber Data</th>
                            <th rowspan="2" class="border border-slate-900">Aksi</th>
                        </tr>
                        <tr>
                            <th rowspan="3" class="border border-slate-900">Tersedia</th>
                            <th rowspan="3" class="border border-slate-900">Min</th>
                            <th rowspan="3" class="border border-slate-900">Max</th>
                            <th rowspan="3" class="border border-slate-900">Defecta</th>
                            <th rowspan="3" class="border sm:w-32 border-slate-900">Pareto ABC</th>
                            <th rowspan="3" class="border border-slate-900">Analisis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="intro-x">
                            <td class="border border-slate-600">1</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600 text-danger">Over</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600 w-32"><a href="/histori-pembelian"><button
                                        class="btn btn-sm btn-primary">Lihat HPP</button></a></td>
                        </tr>
                        <tr class="intro-x">
                            <td class="border border-slate-600">1</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600 text-warning">Under</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600">Contoh Data</td>
                            <td class="border border-slate-600 w-32"><a href="/histori-pembelian"><button
                                        class="btn btn-sm btn-primary">Lihat HPP</button></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END: Data List -->
    </div>
@endsection
