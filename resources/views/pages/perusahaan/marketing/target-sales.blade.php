@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Target Supervisor
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal" data-tw-target="#basic-modal-preview">Tambah
                Data</button>
            <!-- BEGIN: Modal Content -->
            <div id="basic-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-body p-10">
                            <div class="preview">
                                <div>
                                    <table>
                                        <tr>
                                            <td>
                                                <label for="input-wizard-6"
                                                    class="mt-2 mr-3 form-label font-bold">Sales</label>
                                            </td>
                                            <td class="w-full">
                                                <div class="intro-y col-span-12 sm:col-span-6 mt-3 flex">
                                                    <select id="input-wizard-6" class="form-select">
                                                        <option>Marfuah</option>
                                                        <option>Sulastri</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="input-wizard-6"
                                                    class="mt-2 mr-3 form-label font-bold">Supervisor</label>
                                            </td>
                                            <td class="w-full">
                                                <div class="intro-y col-span-12 sm:col-span-6 mt-3 flex">
                                                    <select id="input-wizard-6" class="form-select">
                                                        <option>Dean Andira</option>
                                                        <option>Sulastri</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="input-wizard-6" class="mt-2 mr-3 form-label font-bold">Area
                                                    Rayon</label>
                                            </td>
                                            <td class="w-full">
                                                <div class="intro-y col-span-12 sm:col-span-6 mt-3 flex">
                                                    <select id="input-wizard-6" class="form-select">
                                                        <option>Area 31</option>
                                                        <option>Area 32</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="input-wizard-6" class="mt-2 mr-3 form-label font-bold">Sub
                                                    Rayon</label>
                                            </td>
                                            <td class="w-full">
                                                <div class="intro-y col-span-12 sm:col-span-6 mt-3 flex">
                                                    <select id="input-wizard-6" class="form-select">
                                                        <option>Sub 31</option>
                                                        <option>Sub 32</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="input-wizard-6"
                                                    class="mt-2 mr-3 form-label font-bold">Tahun</label>
                                            </td>
                                            <td class="w-full">
                                                <div class="intro-y col-span-12 sm:col-span-6 mt-3 flex">
                                                    <select id="input-wizard-6" class="form-select">
                                                        <option>2021</option>
                                                        <option>2022</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <table class="table border border-slate-400 mt-5">
                                    <thead>
                                        <tr>
                                            <td>Bulan</td>
                                            <td>Target Penjualan</td>
                                            <td>Penjualan (A)</td>
                                            <td>Retur Penjualan (B)</td>
                                            <td>(A - B)</td>
                                            <td>%</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Januari</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Februari</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Maret</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>April</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Mei</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Juni</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Juli</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Agustus</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>September</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Oktober</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>November</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Desember</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="font-bold">Total</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary mt-5" data-tw-dismiss="modal">Batal</button>
                                    <button class="btn btn-primary mt-5">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Modal Content -->

            <div class="w-56 relative text-slate-500 ">
                <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">Nomor</th>
                        <th class="whitespace-nowrap">Nama Sales</th>
                        <th class="whitespace-nowrap">Nama Supervisor</th>
                        <th class="whitespace-nowrap">Area Rayon</th>
                        <th class="whitespace-nowrap">Sub Rayon</th>
                        <th class="text-center whitespace-nowrap">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="intro-x">
                        <td class="w-40">1</td>
                        <td class="">Maftuhah</td>
                        <td class="">Dean Andira</td>
                        <td class="">Area Rayon 31</td>
                        <td class="">Sub Rayon 31</td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square"
                                        class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                    data-tw-target="#delete-confirmation-modal"> <i data-feather="trash-2"
                                        class="w-4 h-4 mr-1"></i> Delete </a>
                                <a class="flex items-center mr-3 text-warning mx-3" href="javascript:;"
                                    data-tw-toggle="modal" data-tw-target="#basic-modal-preview"> <i data-feather="eye"
                                        class="w-4 h-4 mr-1"></i> Lihat </a>
                                <!-- BEGIN: Delete Confirmation Modal -->
                                <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <div class="p-5 text-center">
                                                    <i data-feather="x-circle"
                                                        class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                                    <div class="text-3xl mt-5">Are you sure?</div>
                                                    <div class="text-slate-500 mt-2">
                                                        Do you really want to delete these records?
                                                        <br>
                                                        This process cannot be undone.
                                                    </div>
                                                </div>
                                                <div class="px-5 pb-8 text-center">
                                                    <button type="button" data-tw-dismiss="modal"
                                                        class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                                    <button type="button" class="btn btn-danger w-24">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Delete Confirmation Modal -->
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
    </div>
@endsection
