@extends('layout.main')

@section('main')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Saldo Awal
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-nowrap">
            <a href="/tambah-saldo-awal"><button class="mr-2 shadow-md btn btn-primary" data-tw-toggle="modal"
                    data-tw-target="#basic-modal-preview">Tambah
                    Saldo Awal +</button></a>
        </div>
    </div>
    <div class="grid-cols-2 gap-4 sm:grid">
        <div class="mt-5 intro-y box">
            <div class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400">
                <h2 class="mr-auto text-base font-medium">
                    Aktiva
                </h2>
            </div>
            <div id="vertical-form" class="p-5">
                <table class="table border border-slate-600">
                    <thead>

                        <tr>
                            <td class="text-white border border-slate-600 bg-primary">Kode</td>
                            <td class="text-white border border-slate-600 bg-primary">Akun</td>
                            <td class="text-white border border-slate-600 bg-primary">Saldo</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($akunAktiva as $item)
                            <tr>
                                <td class="border border-slate-600">{{ $item->kode }}</td>
                                <td class="border border-slate-600">{{ $item->nama_akun }}</td>
                                <td class="border border-slate-600">
                                    @if ($item->nama_akun == 'Piutang Dagang' || $item->nama_akun == 'piutang dagang')
                                        {{ 'Rp. ' . number_format($totalDagangPiutang, 2, ',', '.') }}
                                    @elseif ($item->nama_akun == 'Piutang Konsinyasi' || $item->nama_akun == 'piutang konsinyasi')
                                        {{ 'Rp. ' . number_format($totalKonsinyasiPiutang, 2, ',', '.') }}
                                    @elseif ($item->nama_akun == 'Persediaan Dagang' || $item->nama_akun == 'persediaan dagang')
                                        {{ 'Rp. ' . number_format($persediaanDagang, 2, ',', '.') }}
                                    @else
                                        Rp. 0,00
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <p>Belum tersedia data</p>
                            </tr>
                        @endforelse
                        <tr>
                            <td class="font-bold text-center border border-slate-600 bg-secondary" colspan="2">Total</td>
                            <td class="border border-slate-600">
                                {{ 'Rp. ' . number_format($totalDagangPiutang + $totalKonsinyasiPiutang + $persediaanDagang, 2, ',', '.') }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-5 intro-y box">
            <div class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400">
                <h2 class="mr-auto text-base font-medium">
                    Pasiva
                </h2>
            </div>
            <div id="vertical-form" class="p-5">
                <table class="table border border-slate-600">
                    <thead>
                        <tr>
                            <td class="text-white border border-slate-600 bg-primary">Kode</td>
                            <td class="text-white border border-slate-600 bg-primary">Akun</td>
                            <td class="text-white border border-slate-600 bg-primary">Saldo</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($akunPasifa as $itemPasifa)
                            <tr>
                                <td class="border border-slate-600">{{ $itemPasifa->kode }}</td>
                                <td class="border border-slate-600">{{ $itemPasifa->nama_akun }}</td>
                                <td class="border border-slate-600">
                                    @if ($itemPasifa->nama_akun == 'Hutang Dagang' || $itemPasifa->nama_akun == 'hutang dagang')
                                        {{ 'Rp. ' . number_format($totalHutangDagang, 2, ',', '.') }}
                                    @elseif ($itemPasifa->nama_akun == 'Hutang Konsinyasi' || $itemPasifa->nama_akun == 'hutang konsinyasi')
                                        {{ 'Rp. ' . number_format($totalHutangKonsinyasi, 2, ',', '.') }}
                                    @elseif ($itemPasifa->nama_akun == 'Modal Pemilik' || $itemPasifa->nama_akun == 'modal pemilik')
                                        {{ 'Rp. ' . number_format($modal, 2, ',', '.') }}
                                    @else
                                        Rp. 0,00
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="2" class="font-bold text-center border border-slate-600 bg-secondary">Total</td>
                            <td class="border border-slate-600">
                                {{ 'Rp. ' . number_format($totalHutangDagang + $totalHutangKonsinyasi + $modal, 2, ',', '.') }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
