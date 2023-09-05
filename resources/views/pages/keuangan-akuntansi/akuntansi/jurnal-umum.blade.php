@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Data Jurnal Umum
        </h2>
    </div>
    <div class="flex gap-3 mb-3 justify-between mt-5">
        <div class="w-56 relative text-slate-500 mr-auto">
            <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
            <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
        </div>
        <button class="btn btn-success text-white">Export Excel</button>
    </div>
    <div class="box">
        <div class="overflow-auto">
            <table class="table">
                <thead class="text-center font-bold">
                    <tr>
                        <th class="border border-slate-600" rowspan="2">No. Reff</th>
                        <th class="border border-slate-600" rowspan="2">Tanggal</th>
                        <th class="border border-slate-600" rowspan="2">Kode Akun</th>
                        <th class="border border-slate-600" rowspan="2">Nama Akun</th>
                        <th class="border border-slate-600" rowspan="2">Keterangan</th>
                        <th class="border border-slate-600" colspan="2">Saldo</th>
                    </tr>
                    <tr>
                        <th class="border border-slate-600">Debet</th>
                        <th class="border border-slate-600">Kredit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                    </tr>
                    <tr>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                    </tr>
                    <tr>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
