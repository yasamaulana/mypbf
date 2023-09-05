@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Neraca
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
        <p class="text-xl font-bold">AKTIVA</p>
        <hr>
        <table class="w-full text-lg ">
            <tr class="mt-3">
                <td>1-0001</td>
                <td>Kas Besar</td>
                <td class="text-right">Rp. 1.000.000</td>
            </tr>
            <tr class="mt-3">
                <td>1-0002</td>
                <td>Kas Kecil</td>
                <td class="text-right">Rp. 500.000</td>
            </tr>
            <tr class="mt-3">
                <td>1-0003</td>
                <td>Kas BCA</td>
                <td class="text-right">Rp. 50.000.000</td>
            </tr>
            <tr>
                <td colspan="2" class="font-bold text-right px-3">Total</td>
                <td class="text-right font-bold bg-primary text-white px-3">Rp. 56.500.000</td>
            </tr>
            <tr class="font-bold text-white bg-success p-5">
                <td class="px-3">Total Aktiva</td>
                <td>Rp. 56.500.000</td>
            </tr>
        </table>
        {{-- pasiva --}}
        <p class="text-xl mt-5 font-bold">PASIVA</p>
        <hr>
        <table class="w-full text-lg ">
            <tr class="mt-3">
                <td>2-0001</td>
                <td>Hutang PPN</td>
                <td class="text-right">Rp. 6.000.000</td>
            </tr>
            <tr class="mt-3">
                <td>2-0002</td>
                <td>Hutang Gaji</td>
                <td class="text-right"></td>
            </tr>
            <tr>
                <td colspan="2" class="font-bold text-right px-3">Total</td>
                <td class="text-right font-bold bg-primary text-white px-3">Rp. 6.000.000</td>
            </tr>
            <tr class="mt-3">
                <td>3-0001</td>
                <td>Modal Pemilik</td>
                <td class="text-right">Rp. 50.000.000</td>
            </tr>
            <tr class="mt-3">
                <td>3-0002</td>
                <td>Laba/Rugi</td>
                <td class="text-right">Rp. 500.000</td>
            </tr>
            <tr>
                <td colspan="2" class="font-bold text-right px-3">Total</td>
                <td class="text-right font-bold bg-primary text-white px-3">Rp. 50.500.000</td>
            </tr>
            <tr class="font-bold text-white bg-warning p-5">
                <td class="px-3">Total Aktiva</td>
                <td>Rp. 56.500.000</td>
            </tr>
        </table>
    </div>
@endsection
