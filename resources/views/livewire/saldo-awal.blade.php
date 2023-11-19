<div>
    <div>
        <div class="flex justify-between mt-8 intro-y">
            <h2 class="mr-auto text-lg font-medium">
                Tambah Saldo Awal
            </h2>
            <h2 class="w-64 p-3 font-medium text-center text-white rounded-lg bg-primary">
                Tanggal Saldo Awal: 8-10-2023
            </h2>
        </div>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-nowrap">
                <a href="/saldo-awal"><button class="mr-2 btn btn-secondary"><i data-feather="corner-up-left"
                            class="w-4 h-4 mr-1"></i>
                        Kembali</button></a>
                <button class="mr-2 shadow-md btn btn-primary" data-tw-toggle="modal"
                    data-tw-target="#basic-modal-preview">Tambah
                    Data +</button>
                <!-- BEGIN: Modal Content -->
                <div id="basic-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="rounded-lg modal-dialog modal-xl">
                        <form>
                            @csrf
                            <div class="modal-content">
                                <div class="flex justify-center text-white modal-header bg-primary align-center">
                                    <h2 class="text-lg font-bold">Entri Saldo</h2>
                                </div>
                                <div class="p-10 modal-body">
                                    <div class="preview">
                                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                                            <label data-tw-merge for="horizontal-form-1"
                                                class="inline-block mb-2 sm:w-40">
                                                Akun
                                            </label>
                                            <select data-tw-merge aria-label="Default select example"
                                                class="form-control tom-select" wire:model="id_akun">
                                                <option value="">- Pilih -</option>
                                                @foreach ($akunAkuntansi as $akun)
                                                    <option value="{{ $akun->id }}">
                                                        {{ $akun->kode . ' || ' . $akun->nama_akun }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('id_akun')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                                            <label data-tw-merge for="horizontal-form-1"
                                                class="inline-block mb-2 sm:w-40">
                                                Saldo
                                            </label>
                                            <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                                wire:model="saldo"
                                                class="disabled:bg-slate-100
                                                    disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50
                                                    dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100
                                                    [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50
                                                    [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out
                                                    w-full text-sm border-slate-200 shadow-sm rounded-md
                                                    placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary
                                                    focus:ring-opacity-20 focus:border-primary focus:border-opacity-40
                                                    dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700
                                                    dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                            @error('saldo')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                                            <label data-tw-merge for="horizontal-form-1"
                                                class="inline-block mb-2 sm:w-40">
                                                Tipe Saldo
                                            </label>
                                            <select data-tw-merge aria-label="Default select example"
                                                class="form-control" wire:model="tipe_saldo">
                                                <option value="Saldo Bertambah">Saldo Bertambah</option>
                                                <option value="Saldo Berkurang">Saldo Berkurang</option>
                                            </select>
                                            @error('tipe_saldo')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- footer --}}
                                <div class="modal-footer">
                                    <button class="mt-5 btn btn-secondari" data-tw-dismiss="modal"
                                        type="button">Batal</button>
                                    <button class="mt-5 btn btn-primary" type="button"
                                        wire:click="store()">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END: Modal Content -->

                <div class="relative w-56 text-slate-500 ">
                    <input type="text" class="w-56 pr-10 form-control box" placeholder="Search...">
                    <i class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3" data-feather="search"></i>
                </div>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="col-span-12 mt-5 overflow-auto intro-y lg:overflow-visible">
            <div class="overflow-x-auto">
                <table class="table -mt-2 table-report">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">No.</th>
                            <th class="whitespace-nowrap">Nama Akun</th>
                            <th class="whitespace-nowrap">Saldo Sebelum</th>
                            <th class="whitespace-nowrap">Saldo Sesudah</th>
                            <th class="text-center whitespace-nowrap">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="intro-x">
                            <td class="w-40">1</td>
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="table-report__action w-72">
                                <div class="flex items-center justify-center">
                                    <a class="flex items-center mr-3" href="javascript:;"> <i
                                            data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                    <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#delete-confirmation-modal"> <i data-feather="trash-2"
                                            class="w-4 h-4 mr-1"></i> Delete </a>
                                    <!-- BEGIN: Delete Confirmation Modal -->
                                    <div id="delete-confirmation-modal" class="modal" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="p-0 modal-body">
                                                    <div class="p-5 text-center">
                                                        <i data-feather="x-circle"
                                                            class="w-16 h-16 mx-auto mt-3 text-danger"></i>
                                                        <div class="mt-5 text-3xl">Are you sure?</div>
                                                        <div class="mt-2 text-slate-500">
                                                            Do you really want to delete these records?
                                                            <br>
                                                            This process cannot be undone.
                                                        </div>
                                                    </div>
                                                    <div class="px-5 pb-8 text-center">
                                                        <button type="button" data-tw-dismiss="modal"
                                                            class="w-24 mr-1 btn btn-outline-secondary">Cancel</button>
                                                        <button type="button"
                                                            class="w-24 btn btn-danger">Delete</button>
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
                <div class="flex justify-end gap-3 mt-5">
                    <button class="px-10 btn btn-secondary" data-tw-toggle="modal"
                        data-tw-target="#cancel-confirmation-modal">Batal</button>
                    <button class="px-10 btn btn-primary">Simpan</button>

                    <!-- BEGIN: Delete Confirmation Modal -->
                    <div id="cancel-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="p-0 modal-body">
                                    <div class="p-5 text-center">
                                        <i data-feather="x-circle" class="w-16 h-16 mx-auto mt-3 text-danger"></i>
                                        <div class="mt-5 text-3xl">Yakin Kembali?</div>
                                        <div class="mt-2 text-slate-500">
                                            Perubahan tidak akan disimpan
                                        </div>
                                    </div>
                                    <div class="px-5 pb-8 text-center">
                                        <button type="button" data-tw-dismiss="modal"
                                            class="w-24 mr-1 btn btn-outline-secondary">Kembali</button>
                                        <a href="/saldo-awal"><button type="button"
                                                class="w-24 btn btn-danger">Batalkan</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Delete Confirmation Modal -->
                </div>
            </div>
        </div>
        <!-- END: Data List -->
    </div>
</div>
