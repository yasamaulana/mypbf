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
                                No. Reff
                            </label>
                            @php
                                $nomor_urut = count($piutangAwals) + 1;

                                $bulan = date('m');
                                $tahun = date('Y');
                                $kode = sprintf('%02d', $nomor_urut) . "/PA/$bulan/$tahun";
                            @endphp
                            <input data-tw-merge id="horizontal-form-1" type="text" placeholder="Auto" name="no_reff"
                                readonly value="{{ $piutangAwal ? $piutangAwal->no_reff : $kode }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                No. Faktur
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="text" placeholder="" name="no_faktur"
                                required value="{{ $piutangAwal ? $piutangAwal->no_faktur : '' }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                Tgl. Faktur
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="date" placeholder="Auto" required
                                name="tgl_faktur" value="{{ $piutangAwal ? $piutangAwal->tgl_faktur : '' }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                Pelanggan
                            </label>
                            <select data-tw-merge aria-label="Default select example" class="form-control" required
                                name="pelanggan">
                                <option value="">- Pilih -</option>
                                @foreach ($pelanggans as $pelanggan)
                                    <option
                                        {{ $piutangAwal ? ($piutangAwal->pelanggan == $pelanggan->nama ? 'selected' : '') : '' }}>
                                        {{ $pelanggan->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                Tgl. Jatuh tempo
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="date" placeholder="Auto" required
                                name="tgl_jth_tempo" value="{{ $piutangAwal ? $piutangAwal->tgl_jth_tempo : '' }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                Jumlah Piutang
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="text" name="jmlh_piutang" required
                                oninput="autoFormatRupiah(this)"
                                value="{{ $piutangAwal ? $piutangAwal->jmlh_piutang : '' }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                Jenis Piutang
                            </label>
                            <select data-tw-merge aria-label="Default select example" class="form-control"
                                name="jns_piutang" required>
                                <option value="">- Pilih -</option>
                                <option
                                    {{ $piutangAwal && $piutangAwal->jns_piutang == 'Piutang Dagang' ? 'selected' : '' }}>
                                    Piutang Dagang
                                </option>
                                <option
                                    {{ $piutangAwal && $piutangAwal->jns_piutang == 'Piutang Konsinyasi' ? 'selected' : '' }}>
                                    Piutang Konsinyasi
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
