@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Profile Perusahaan
        </h2>
    </div>
    <!-- BEGIN: Profile Info -->
    <div class="intro-y box px-5 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
            <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                </div>
                <div class="ml-5">
                    <input id="regular-form-1" type="text" class="form-control" placeholder="Nama Perusahaan">
                    <input id="regular-form-1" type="text" class="form-control mt-2" placeholder="Alamat Perusahaan">
                </div>
            </div>
            <div
                class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-3">Detail</div>
                <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                    <input id="regular-form-1" type="text" class="form-control" placeholder="Provinsi">
                    <input id="regular-form-1" type="text" class="form-control mt-2" placeholder="Kabupaten/Kota">
                    <input id="regular-form-1" type="text" class="form-control mt-2" placeholder="Nomor Telepon">
                </div>
            </div>
        </div>
    </div>
    <!-- END: Profile Info -->
    <div class="tab-content mt-5">
        <div id="profile" class="tab-pane active" role="tabpanel" aria-labelledby="profile-tab">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: New Products -->
                <div class="intro-y box col-span-12">
                    <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Detail Selanjutnya
                        </h2>
                    </div>
                    <div class="flex flex-col justify-center items-center lg:items-start mt-4 m-5">
                        <input id="regular-form-1" type="text" class="form-control mt-2" placeholder="NPWP">
                        <input id="regular-form-1" type="text" class="form-control mt-2" placeholder="No. ijin PBF ">
                        <input id="regular-form-1" type="text" class="form-control mt-2" placeholder="No ijin DAK ">
                        <input id="regular-form-1" type="text" class="form-control mt-2" placeholder="Apoteker ">
                        <input id="regular-form-1" type="text" class="form-control mt-2" placeholder="SIPA ">
                        <input id="regular-form-1" type="text" class="form-control mt-2" placeholder="PJ Alkes ">
                        <input id="regular-form-1" type="text" class="form-control mt-2" placeholder="SIP ">
                        <input id="regular-form-1" type="text" class="form-control mt-2" placeholder="Tgl PKP">
                        <input id="regular-form-1" type="text" class="form-control mt-2" placeholder="Nomor PKP ">
                        <input id="regular-form-1" type="text" class="form-control mt-2" placeholder="Tgl Neraca Awal ">
                    </div>
                </div>
                <!-- END: New Products -->
                <!-- BEGIN: New Authors -->
                <div class="intro-y box col-span-12">
                    <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Logo
                        </h2>
                    </div>
                    <div class="intro-y box px-5 pt-5 mt-5">
                        <div
                            class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                            <div
                                class="lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                                <div class="font-medium text-center lg:text-left">Logo Perusahaan</div>
                                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative mt-5">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-4.jpg">
                                </div>
                            </div>
                            <div
                                class="lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                                <div class="font-medium text-center lg:text-left">TTD APT</div>
                                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative mt-5">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-4.jpg">
                                </div>
                            </div>
                            <div
                                class="lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                                <div class="font-medium text-center lg:text-left">TTD Pj Alkes</div>
                                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative mt-5">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-4.jpg">
                                </div>
                            </div>
                            <div
                                class="lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                                <div class="font-medium text-center lg:text-left">Stempel</div>
                                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative mt-5">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-4.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: New Authors -->
            </div>
            <div class="flex justify-center align-center mt-5">
                <button class="btn btn-primary"> <i data-feather="download" class="w-4 h-4 mr-2"></i>
                    Simpan Perubahan </button>
            </div>
        </div>
    </div>
@endsection
