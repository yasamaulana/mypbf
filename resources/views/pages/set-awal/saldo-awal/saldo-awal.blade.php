@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Saldo Awal
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="/tambah-saldo-awal"><button class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal"
                    data-tw-target="#basic-modal-preview">Tambah
                    Saldo Awal +</button></a>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-4">
        <div class="intro-y box mt-5">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Aktiva
                </h2>
            </div>
            <div id="vertical-form" class="p-5">
                <table class="table border border-slate-600">
                    <thead>

                        <tr>
                            <td class="border border-slate-600 bg-primary text-white">Akun</td>
                            <td class="border border-slate-600 bg-primary text-white">Saldo</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($akunAktiva as $item)
                            <tr>
                                <td class="border border-slate-600">{{ $item->nama_akun }}</td>
                                <td class="border border-slate-600">
                                    @if ($item->nama_akun == 'Piutang Dagang' || $item->nama_akun == 'piutang dagang')
                                        {{ 'Rp. ' . number_format($totalDagangPiutang, 2, ',', '.') }}
                                    @endif
                                    @if ($item->nama_akun == 'Piutang Konsinyasi' || $item->nama_akun == 'piutang konsinyasi')
                                        {{ 'Rp. ' . number_format($totalKonsinyasiPiutang, 2, ',', '.') }}
                                    @endif
                                    @if ($item->nama_akun == 'Persediaan Dagang' || $item->nama_akun == 'persediaan dagang')
                                        {{ 'Rp. ' . number_format($persediaanDagang, 2, ',', '.') }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td class="border border-slate-600 text-center bg-secondary font-bold">Total</td>
                            <td class="border border-slate-600"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="intro-y box mt-5">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Pasiva
                </h2>
            </div>
            <div id="vertical-form" class="p-5">
                <table class="table border border-slate-600">
                    <thead>
                        <tr>
                            <td class="border border-slate-600 bg-primary text-white">Akun</td>
                            <td class="border border-slate-600 bg-primary text-white">Saldo</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($akunPasifa as $itemPasifa)
                            <tr>
                                <td class="border border-slate-600">{{ $itemPasifa->nama_akun }}</td>
                                <td class="border border-slate-600">
                                    @if ($itemPasifa->nama_akun == 'Hutang Dagang' || $itemPasifa->nama_akun == 'hutang dagang')
                                        {{ 'Rp. ' . number_format($totalHutangDagang, 2, ',', '.') }}
                                    @endif
                                    @if ($itemPasifa->nama_akun == 'Hutang Konsinyasi' || $itemPasifa->nama_akun == 'hutang konsinyasi')
                                        {{ 'Rp. ' . number_format($totalHutangKonsinyasi, 2, ',', '.') }}
                                    @endif
                                    @if ($itemPasifa->nama_akun == 'Modal Pemilik' || $itemPasifa->nama_akun == 'modal pemilik')
                                        {{ 'Rp. ' . number_format($modal, 2, ',', '.') }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td class="border border-slate-600 text-center bg-secondary font-bold">Total</td>
                            <td class="border border-slate-600"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
