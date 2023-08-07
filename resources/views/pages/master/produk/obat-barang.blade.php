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
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="font-medium text-base mr-auto">
                                Data Produk
                            </h2>
                        </div>
                        <div class="modal-body px-10">
                            <div class="preview">
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="intro-y col-span-12 sm:col-span-6">
                                        <label for="input-wizard-3" class="form-label">Nama Obat/barang</label>
                                        <input id="input-wizard-3" type="text" class="form-control"
                                            placeholder="Nama Obat/barang">
                                    </div>
                                    <div class="intro-y col-span-12 sm:col-span-6 flex gap-3">
                                        <div class="">
                                            <label for="input-wizard-3" class="form-label">Kode Obat/Barang</label>
                                            <input id="input-wizard-3" type="text" class="form-control"
                                                placeholder="Otomatis">
                                        </div>
                                        <div class="">
                                            <label for="input-wizard-3" class="form-label">Barcode BPOM</label>
                                            <input id="input-wizard-3" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="intro-y col-span-12 sm:col-span-6">
                                        <label for="input-wizard-6" class="form-label">Golongan</label>
                                        <select id="input-wizard-6" class="form-select">
                                            <option>10</option>
                                            <option>25</option>
                                            <option>35</option>
                                            <option>50</option>
                                        </select>
                                    </div>
                                    <div class="intro-y col-span-12 sm:col-span-6">
                                        <label for="input-wizard-6" class="form-label">Sub Golongan</label>
                                        <select id="input-wizard-6" class="form-select">
                                            <option>10</option>
                                            <option>25</option>
                                            <option>35</option>
                                            <option>50</option>
                                        </select>
                                    </div>
                                    <div class="intro-y col-span-12 sm:col-span-6">
                                        <label for="input-wizard-6" class="form-label">Jenis Obat/Barang</label>
                                        <select id="input-wizard-6" class="form-select">
                                            <option>10</option>
                                            <option>25</option>
                                            <option>35</option>
                                            <option>50</option>
                                        </select>
                                    </div>
                                    <div class="intro-y col-span-12 sm:col-span-6">
                                        <label for="input-wizard-6" class="form-label">Produsen</label>
                                        <select id="input-wizard-6" class="form-select">
                                            <option>10</option>
                                            <option>25</option>
                                            <option>35</option>
                                            <option>50</option>
                                        </select>
                                    </div>
                                    <div class="intro-y col-span-12 sm:col-span-6">
                                        <label for="input-wizard-6" class="form-label">Tipe</label>
                                        <select id="input-wizard-6" class="form-select">
                                            <option>10</option>
                                            <option>25</option>
                                            <option>35</option>
                                            <option>50</option>
                                        </select>
                                    </div>
                                    <div class="intro-y col-span-12 sm:col-span-6 flex gap-3">
                                        <div class="">
                                            <label for="input-wizard-3" class="form-label">Stok Minimal</label>
                                            <input id="input-wizard-3" type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="">
                                            <label for="input-wizard-3" class="form-label">Stok Maksimal</label>
                                            <input id="input-wizard-3" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="intro-y col-span-12 sm:col-span-6">
                                        <label for="input-wizard-3" class="form-label">Komposisi</label>
                                        <textarea id="input-wizard-3" type="text" class="form-control" placeholder=""></textarea>
                                    </div>
                                    <div class="intro-y col-span-12 sm:col-span-6">
                                        <label for="input-wizard-3" class="form-label">Zak Aktif</label>
                                        <textarea id="input-wizard-3" type="text" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="intro-y col-span-12 sm:col-span-6 mt-2">
                                    <label for="input-wizard-3" class="form-label">Bentuk Dan Kekuatan</label>
                                    <input id="input-wizard-3" type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="flex mt-3 gap-3">
                                <div class="intro-y col-span-12 sm:col-span-6">
                                    <label for="input-wizard-3" class="form-label">No. Ijin Edar</label>
                                    <input id="input-wizard-3" type="text" class="form-control" placeholder="">
                                </div>
                                <div class="intro-y col-span-12 sm:col-span-6">
                                    <label for="input-wizard-6" class="form-label">Satuan Dasar/Beli</label>
                                    <select id="input-wizard-6" class="form-select">
                                        <option>10</option>
                                        <option>25</option>
                                        <option>35</option>
                                        <option>50</option>
                                    </select>
                                </div>
                                <div class="mt-2">
                                    <label>Exp Date</label>
                                    <div class="mt-2">
                                        <div class="form-check form-switch">
                                            <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <label>Aktif</label>
                                    <div class="mt-2">
                                        <div class="form-check form-switch">
                                            <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="table-set" class="form-control">Setting Harga Jual</label>
                                <table class="table border mt-3" id="table-set">
                                    <thead>
                                        <tr>
                                            <td>Kelompok</td>
                                            <td>%</td>
                                            <td>Disc 1</td>
                                            <td>Disc 2</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Kelompok 1</td>
                                            <td>15</td>
                                            <td>15</td>
                                            <td>15</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="border-b border-slate-200/60 dark:border-darkmode-400 mt-3">
                                <label for="single-file-upload" class="form-control">Gambar</label>
                                <div class="intro-y box">
                                    <div id="single-file-upload">
                                        <div class="preview">
                                            <form data-single="true" action="/file-upload" class="dropzone">
                                                <div class="fallback">
                                                    <input name="file" type="file" />
                                                </div>
                                                <div class="dz-message" data-dz-message>
                                                    <div class="text-lg font-medium">Taruh Gambar Disini</div>
                                                    <div class="text-slate-500"> Seret file atau klik untuk memilih
                                                        gambar yang akan diupload </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="source-code hidden">
                                            <button data-target="#copy-single-file-upload"
                                                class="copy-code btn py-1 px-2 btn-outline-secondary"> <i
                                                    data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                                            </button>
                                            <div class="overflow-y-auto mt-3 rounded-md">
                                                <pre id="copy-single-file-upload" class="source-preview"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagform data-single=&quot;true&quot; action=&quot;/file-upload&quot; class=&quot;dropzone&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;fallback&quot;HTMLCloseTag HTMLOpenTaginput name=&quot;file&quot; type=&quot;file&quot; /HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;dz-message&quot; data-dz-messageHTMLCloseTag HTMLOpenTagdiv class=&quot;text-lg font-medium&quot;HTMLCloseTagDrop files here or click to upload.HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;text-slate-500&quot;HTMLCloseTag This is just a demo dropzone. Selected files are HTMLOpenTagspan class=&quot;font-medium&quot;HTMLCloseTagnotHTMLOpenTag/spanHTMLCloseTag actually uploaded. HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/formHTMLCloseTag </code> </pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
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
    <div class="intro-y col-span-12 mt-5 overflow-auto lg:overflow-visible">
        <table class="table border table-report -mt-2">
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
                                                <i data-feather="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
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
