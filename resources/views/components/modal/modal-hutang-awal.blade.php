<div id="{{ $id_modal . $id }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="rounded-lg modal-dialog modal-xl">
        <form action="{{ route($route, ['id' => $id]) }}" method="post">
            @csrf
            <div class="modal-content">
                <div class="flex justify-center text-white modal-header bg-primary align-center">
                    <h2 class="text-lg font-bold">Piutang Awal</h2>
                </div>
                <div class="p-10 modal-body">
                    <div class="preview">
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                No. Reff Contoh
                            </label>
                            @php
                                $nomor_urut = count($hutangAwals) + 1;

                                $bulan = date('m');
                                $tahun = date('Y');
                                $kode = sprintf('%02d', $nomor_urut) . "/HA/$bulan/$tahun";
                            @endphp
                            <input data-tw-merge id="horizontal-form-1" type="text" placeholder="Auto" name="no_reff"
                                value="{{ $hutangAwal ? $hutangAwal->no_reff : $kode }}" required autofocus readonly
                                required
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                No. Faktur
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="text" placeholder="Auto"
                                name="no_faktur" value="{{ $hutangAwal ? $hutangAwal->no_faktur : '' }}" required
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                Tgl. Faktur
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="date" placeholder="Auto" required
                                name="tgl_faktur" value="{{ $hutangAwal ? $hutangAwal->tgl_faktur : '' }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                Supplier
                            </label>
                            <select data-tw-merge aria-label="Default select example" class="form-control"
                                name="supplier" required>
                                <option value="">- Pilih -</option>
                                @foreach ($suppliers as $supplier)
                                    <option
                                        {{ $hutangAwal ? ($hutangAwal->supplier == $supplier->nama_suplier ? 'selected' : '') : '' }}>
                                        {{ $supplier->nama_suplier }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                Tgl. Jatuh tempo
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="date" placeholder="Auto" required
                                name="tgl_jth_tempo" value="{{ $hutangAwal ? $hutangAwal->tgl_jth_tempo : '' }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                Jumlah Hutang
                            </label>
                            <input data-tw-merge id="horizontal-form" type="text" name="jmlh_hutang"
                                oninput="autoFormatRupiah(this)" required
                                value="{{ $hutangAwal ? $hutangAwal->jmlh_hutang : '' }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                Jenis Hutang
                            </label>
                            <select data-tw-merge aria-label="Default select example" class="form-control"
                                name="jns_hutang" required>
                                <option value="">- Pilih -</option>
                                <option
                                    {{ $hutangAwal && $hutangAwal->jns_hutang == 'Hutang Dagang' ? 'selected' : '' }}>
                                    Hutang Dagang
                                </option>
                                <option
                                    {{ $hutangAwal && $hutangAwal->jns_hutang == 'Hutang Konsinyasi' ? 'selected' : '' }}>
                                    Hutang Konsinyasi
                                </option>
                            </select>

                        </div>
                    </div>
                </div>
                {{-- footer --}}
                <div class="modal-footer">
                    <button class="mt-5 btn btn-secondari" data-tw-dismiss="modal" type="button">Batal</button>
                    <button class="mt-5 btn btn-primary" type="submit">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function autoFormatRupiah(input) {
        let value = input.value;

        value = value.replace(/\D/g, '');

        if (value === '') {
            input.value = '';
        } else {
            let number = parseInt(value, 10);
            let formattedValue = number.toLocaleString('id-ID');
            input.value = formattedValue;
        }
    }
</script>
