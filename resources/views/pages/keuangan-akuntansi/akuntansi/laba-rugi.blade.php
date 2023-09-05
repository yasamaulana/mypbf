@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Laba / Rugi
        </h2>
    </div>
    <div class="box p-5 mt-5">
        <div class="sm:flex gap-3">
            <div class="">
                <div class="flex gap-2 overflow-auto mr-auto mb-2 sm:mb-0">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-60">
                        Periode Sampai
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="date" placeholder="Stok dari master"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
            </div>
            <div class="flex gap-2 mt-3 sm:mt-0">
                <button class="btn btn-success text-white">Tampilkan</button>
                <button class="btn btn-warning text-white">Setting</button>
            </div>
        </div>
    </div>
    <div class="box p-5 mt-5">
        <div class="">
            <p class="text-lg font-bold">PENDAPATAN</p>
            <hr>
            <div class="ml-5 mt-5">
                <table class="w-full">
                    <p class="font-bold text-lg">Pendapatan Penjualan</p>
                    <tr class="mt-3">
                        <td>4-0001</td>
                        <td class="text-right">Rp. -</td>
                    </tr>
                    <tr class="mt-3">
                        <td>4-0002</td>
                        <td class="text-right">Rp. -</td>
                    </tr>
                    <tr>
                        <td class="font-bold text-right px-3">Total</td>
                        <td class="text-right font-bold bg-primary text-white px-3">Rp. -</td>
                    </tr>
                    <tr>
                        <td>
                            <p class="font-bold text-lg">Retur Penjualan</p>
                        </td>
                    </tr>
                    <tr class="mt-3">
                        <td>4-0001</td>
                        <td class="text-right">Rp. -</td>
                    </tr>
                    <tr class="mt-3">
                        <td>4-0002</td>
                        <td class="text-right">Rp. -</td>
                    </tr>
                    <tr>
                        <td class="font-bold text-right px-3">Total</td>
                        <td class="text-right font-bold bg-primary text-white px-3">Rp. -</td>
                    </tr>
                    <tr>
                        <td class="font-bold text-right px-3">Total Pendapatan</td>
                        <td class="text-right font-bold bg-slate-300 text-white px-3">Rp. -</td>
                    </tr>
                    <tr>
                        <td>
                            <p class="font-bold text-lg">Harga Pokok Penjualan</p>
                        </td>
                    </tr>
                    <tr class="mt-3">
                        <td>4-0001</td>
                        <td class="text-right">Rp. -</td>
                    </tr>
                    <tr class="mt-3">
                        <td>4-0002</td>
                        <td class="text-right">Rp. -</td>
                    </tr>
                    <tr>
                        <td class="font-bold text-right px-3">Total</td>
                        <td class="text-right font-bold bg-primary text-white px-3">Rp. -</td>
                    </tr>
                    <tr>
                        <td class="font-bold text-right px-3">Total Harga Pokok Penjualan</td>
                        <td class="text-right font-bold bg-slate-300 text-white px-3">Rp. -</td>
                    </tr>
                </table>
            </div>
            <table class="w-full">
                <tr class="font-bold text-white bg-success p-5">
                    <td class="px-3">Laba / Rugi Kotor</td>
                    <td class="text-right px-3">Rp. -</td>
                </tr>
            </table>
        </div>
        <div class="mt-5">
            <p class="text-lg font-bold">BIAYA OPERASIONAL</p>
            <hr>
            <div class="ml-5 mt-5">
                <table class="w-full">
                    <tr>
                        <td>
                            <p class="font-bold text-lg">Biaya</p>
                        </td>
                    </tr>
                    <tr class="mt-3">
                        <td>4-0001</td>
                        <td class="text-right">Rp. -</td>
                    </tr>
                    <tr class="mt-3">
                        <td>4-0002</td>
                        <td class="text-right">Rp. -</td>
                    </tr>
                    <tr>
                        <td class="font-bold text-right px-3">Total</td>
                        <td class="text-right font-bold bg-primary text-white px-3">Rp. -</td>
                    </tr>
                    <tr>
                        <td class="font-bold text-right px-3">Total Biaya Operasional</td>
                        <td class="text-right font-bold bg-slate-300 text-white px-3">Rp. -</td>
                    </tr>
                </table>
            </div>
            <table class="w-full">
                <tr class="font-bold text-white bg-success p-5">
                    <td class="px-3">Laba / Rugi Bersih Operasional</td>
                    <td class="text-right px-3">Rp. -</td>
                </tr>
            </table>
        </div>
        <div class="mt-5">
            <p class="text-lg font-bold">PENDAPATAN LAIN</p>
            <hr>
            <div class="ml-5 mt-5">
                <table class="w-full">
                    <tr>
                        <td>
                            <p class="font-bold text-lg">Pendapatan Lain</p>
                        </td>
                    </tr>
                    <tr class="mt-3">
                        <td>4-0001</td>
                        <td class="text-right">Rp. -</td>
                    </tr>
                    <tr class="mt-3">
                        <td>4-0002</td>
                        <td class="text-right">Rp. -</td>
                    </tr>
                    <tr>
                        <td class="font-bold text-right px-3">Total</td>
                        <td class="text-right font-bold bg-primary text-white px-3">Rp. -</td>
                    </tr>
                    <tr>
                        <td class="font-bold text-right px-3">Total Pendapatan Lain</td>
                        <td class="text-right font-bold bg-slate-300 text-white px-3">Rp. -</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="mt-5">
            <p class="text-lg font-bold">BIAYA LAIN</p>
            <hr>
            <div class="ml-5 mt-5">
                <table class="w-full">
                    <tr>
                        <td>
                            <p class="font-bold text-lg">Biaya Lain</p>
                        </td>
                    </tr>
                    <tr class="mt-3">
                        <td>4-0001</td>
                        <td class="text-right">Rp. -</td>
                    </tr>
                    <tr class="mt-3">
                        <td>4-0002</td>
                        <td class="text-right">Rp. -</td>
                    </tr>
                    <tr>
                        <td class="font-bold text-right px-3">Total</td>
                        <td class="text-right font-bold bg-primary text-white px-3">Rp. -</td>
                    </tr>
                    <tr>
                        <td class="font-bold text-right px-3">Total Biaya Lain</td>
                        <td class="text-right font-bold bg-slate-300 text-white px-3">Rp. -</td>
                    </tr>
                </table>
            </div>
            <table class="w-full">
                <tr class="font-bold text-white bg-success p-5">
                    <td class="px-3">Laba / Rugi Bersih</td>
                    <td class="text-right px-3">Rp. -</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
