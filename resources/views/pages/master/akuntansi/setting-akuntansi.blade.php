@extends('layout.main')

@section('main')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Setting Akuntansi
        </h2>
    </div>
    <div class="col-span-12 mt-5 intro-y lg:col-span-6">
        <!-- BEGIN: Input -->
        <div class="intro-y box">
            <div class="w-full p-3 font-bold text-white bg-primary">
                <h2>Akun Dasar</h2>
            </div>
            <div class="flex w-full gap-3 p-3 mt-3">
                <div class="flex flex-col items-center sm:flex-row">
                    <select data-tw-merge aria-label=".form-select-lg example"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 text-lg py-1.5 pl-4 pr-8 sm:mt-2 sm:mr-2 sm:mt-2 sm:mr-2">
                        <option>Chris Evans</option>
                        <option>Liam Neeson</option>
                        <option>Daniel Craig</option>
                    </select>
                    <select data-tw-merge aria-label="Default select example"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 mt-2 sm:mr-2 mt-2 sm:mr-2">
                        <option>Chris Evans</option>
                        <option>Liam Neeson</option>
                        <option>Daniel Craig</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
@endsection
