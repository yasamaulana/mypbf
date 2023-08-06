@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Obat / Barang
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal" data-tw-target="#basic-modal-preview">Tambah
                Produk Baru</button>
            <!-- BEGIN: Modal Content -->
            <div id="basic-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body p-10">
                            <div class="preview">
                                <div>
                                    <label for="vertical-form-1" class="form-label">NIP</label>
                                    <input id="vertical-form-1" type="text" class="form-control" placeholder="">
                                </div>
                                <div>
                                    <label for="vertical-form-1" class="form-label mt-3">Nama Pegawai</label>
                                    <input id="vertical-form-1" type="text" class="form-control" placeholder="">
                                </div>
                                <div>
                                    <label for="vertical-form-1" class="form-label mt-3">Alamat</label>
                                    <input id="vertical-form-1" type="text" class="form-control" placeholder="">
                                </div>
                                <div>
                                    <label for="vertical-form-1" class="form-label mt-3">Nomor Telepon</label>
                                    <input id="vertical-form-1" type="text" class="form-control" placeholder="">
                                </div>
                                <div>
                                    <label for="vertical-form-1" class="form-label mt-3">Tanggal Lahir</label>
                                    <input id="vertical-form-1" type="date" class="form-control" placeholder="">
                                </div>
                                <div>
                                    <label for="vertical-form-1" class="form-label mt-3">Jenis Kelamin</label>
                                    <input id="vertical-form-1" type="text" class="form-control" placeholder="">
                                </div>
                                <div>
                                    <label for="vertical-form-1" class="form-label mt-3">Jabatan</label>
                                    <input id="vertical-form-1" type="text" class="form-control" placeholder="">
                                </div>
                                <div class="">
                                    <label for="vertical-form-1" class="form-label mt-3">Foto</label>
                                    <form data-single="true" action="/file-upload" class="dropzone">
                                        <div class="fallback">
                                            <input name="file" type="file" />
                                        </div>
                                        <div class="dz-message" data-dz-message>
                                            <div class="text-lg font-medium">Seret atau klik</div>
                                            <div class="text-slate-500">Ambil gambar atau seret kesini untuk upload gambar
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <button class="btn btn-primary mt-5">Simpan</button>
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
                        <th class="">Kode obat</th>
                        <th class="">Barcode PBOm</th>
                        <th class="">Nama Obat/Barang</th>
                        <th class="">Golongan</th>
                        <th class="">Sub Golongan</th>
                        <th class="">Produsen</th>
                        <th class="">Tipe</th>
                        <th class="">No Ijin Edar</th>
                        <th class="">Komposisi</th>
                        <th class="">Zar Aktif</th>
                        <th class="">Bentuk Kekuatan</th>
                        <th class="">Status</th>
                        <th class="text-center ">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="intro-x">
                        <td class="w-40">11231</td>
                        <td class="">data contoh</td>
                        <td class="">data contoh</td>
                        <td class="">data contoh</td>
                        <td class="">data contoh</td>
                        <td class="">data contoh</td>
                        <td class="">data contoh</td>
                        <td class="">data contoh</td>
                        <td class="">data contoh</td>
                        <td class="">data contoh</td>
                        <td class="">data contoh</td>
                        <td class="">data contoh</td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="credit-card"
                                        class="w-4 h-4 mr-1"></i> Harga </a>
                                <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square"
                                        class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                    data-tw-target="#delete-confirmation-modal"> <i data-feather="trash-2"
                                        class="w-4 h-4 mr-1"></i> Delete </a>
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
