@extends('layout.main')

@section('main')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Neraca
        </h2>
    </div>
    <div class="p-5 mt-5 box">
        <div class="gap-3 sm:flex">
            <div class="">
                <div class="flex gap-2 mb-2 mr-auto overflow-auto sm:mb-0">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 sm:w-60">
                        Periode Sampai
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="date" placeholder="Stok dari master"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
            </div>
            <div class="flex gap-2 mt-3 sm:mt-0">
                <button class="text-white btn btn-success">Tampilkan</button>
                <button class="text-white btn btn-warning">Setting</button>
            </div>
        </div>
    </div>
    <div class="p-5 mt-5 box">
        <p class="text-xl font-bold">AKTIVA</p>
        <hr>
        <table class="w-full text-lg ">
            @foreach ($akunAktiva as $akun)
                <tr class="mt-3">
                    <td>{{ $akun->kode }}</td>
                    <td>{{ $akun->nama_akun }}</td>
                    <td class="text-right">
                        @if ($akun->nama_akun == 'Piutang Dagang' || $akun->nama_akun == 'piutang dagang')
                            {{ 'Rp. ' . number_format($totalPiutangDagang, 2, ',', '.') }}
                        @elseif ($akun->nama_akun == 'Piutang Konsinyasi' || $akun->nama_akun == 'piutang konsinyasi')
                            {{ 'Rp. ' . number_format($totalPiutangKonsinyasi, 2, ',', '.') }}
                        @elseif ($akun->nama_akun == 'Persediaan Dagang' || $akun->nama_akun == 'persediaan dagang')
                            {{ 'Rp. ' . number_format($PersediaanDagang, 2, ',', '.') }}
                        @else
                            Rp. 0,00
                        @endif
                    </td>
                </tr>
            @endforeach
            <tr>
                <td colspan="2" class="px-3 font-bold text-right">Total</td>
                <td class="px-3 font-bold text-right text-white bg-primary">
                    {{ 'Rp. ' . number_format($totalPiutangDagang + $totalPiutangKonsinyasi + $PersediaanDagang, 2, ',', '.') }}
                </td>
            </tr>
            <tr class="p-5 font-bold text-white bg-success">
                <td class="px-3">Total Aktiva</td>
                <td>{{ 'Rp. ' . number_format($totalPiutangDagang + $totalPiutangKonsinyasi + $PersediaanDagang, 2, ',', '.') }}
                </td>
            </tr>
        </table>
        {{-- pasiva --}}
        <p class="mt-5 text-xl font-bold">PASIVA</p>
        <hr>
        <table class="w-full text-lg ">
            @foreach ($akunPasiva as $akun)
                <tr class="mt-3">
                    <td>{{ $akun->kode }}</td>
                    <td>{{ $akun->nama_akun }}</td>
                    <td class="text-right">
                        @if ($akun->nama_akun == 'Hutang Dagang' || $akun->nama_akun == 'hutang dagang')
                            {{ 'Rp. ' . number_format($totalHutangDagang, 2, ',', '.') }}
                        @elseif ($akun->nama_akun == 'Hutang Konsinyasi' || $akun->nama_akun == 'hutang konsinyasi')
                            {{ 'Rp. ' . number_format($totalHutangKonsinyasi, 2, ',', '.') }}
                        @elseif ($akun->nama_akun == 'Modal Pemilik' || $akun->nama_akun == 'modal pemilik')
                            {{ 'Rp. ' . number_format($modal, 2, ',', '.') }}
                        @else
                            Rp. 0,00
                        @endif
                    </td>
                </tr>
            @endforeach
            <td colspan="2" class="px-3 font-bold text-right">Total</td>
            <td class="px-3 font-bold text-right text-white bg-primary">
                {{ 'Rp. ' . number_format($totalHutangDagang + $totalHutangKonsinyasi + $modal, 2, ',', '.') }}</td>
            </tr>
            <tr class="p-5 font-bold text-white bg-warning">
                <td class="px-3">Total Pasiva</td>
                <td> {{ 'Rp. ' . number_format($totalHutangDagang + $totalHutangKonsinyasi + $modal, 2, ',', '.') }}</td>
            </tr>
        </table>
    </div>
@endsection
