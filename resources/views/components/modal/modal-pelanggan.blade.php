<div id="{{ $id_modal . $id }}" class="modal" tabindex="-1" aria-hidden="true">
    @php
        use Laravolt\Indonesia\Models\Province;
        use Laravolt\Indonesia\Models\City;
    @endphp
    <div class="modal-dialog modal-xl">
        <form action="{{ route($route, ['id' => $id]) }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="p-10 modal-body">
                    <div class="preview">
                        <div data-tw-merge class="items-center block sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                Kode
                            </label>
                            <div class="flex w-full gap-3">
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder="Auto" required
                                    name="kode"
                                    value="{{ $pelanggan ? $pelanggan->kode : rand(pow(10, 10), pow(10, 11) - 1) }}"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder="Kode e-Report"
                                    required name="kode_e_report"
                                    value="{{ $pelanggan ? $pelanggan->kode_e_report : '' }}"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                Tipe
                            </label>
                            <select data-tw-merge aria-label="Default select example" required name="tipe"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 mt-2 sm:mr-2 mt-2 sm:mr-2">
                                <option {{ $pelanggan ? ($pelanggan->tipe == 'RS' ? 'selected' : '') : '' }}>RS</option>
                                <option {{ $pelanggan ? ($pelanggan->tipe == 'Apotek' ? 'selected' : '') : '' }}>Apotek
                                </option>
                                <option {{ $pelanggan ? ($pelanggan->tipe == 'PBF' ? 'selected' : '') : '' }}>PBF
                                </option>
                                <option
                                    {{ $pelanggan ? ($pelanggan->tipe == 'Sarana Pemerintah' ? 'selected' : '') : '' }}>
                                    Sarana Pemerintah</option>
                                <option {{ $pelanggan ? ($pelanggan->tipe == 'Puskesmas' ? 'selected' : '') : '' }}>
                                    Puskesmas</option>
                                <option {{ $pelanggan ? ($pelanggan->tipe == 'Klinik' ? 'selected' : '') : '' }}>Klinik
                                </option>
                                <option {{ $pelanggan ? ($pelanggan->tipe == 'Toko Obat' ? 'selected' : '') : '' }}>
                                    Toko Obat</option>
                            </select>
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                Nama
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="text" required name="nama"
                                value="{{ $pelanggan ? $pelanggan->nama : '' }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                Alamat
                            </label>
                            <textarea required name="alamat" id="" rows="2" class="form-control">{{ $pelanggan ? $pelanggan->alamat : '' }}</textarea>
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                Provinsi
                            </label>
                            <select data-placeholder="Select your favorite actors" class="w-full tom-select" required
                                name="provinsi">
                                @foreach (Province::all() as $prov)
                                    <option
                                        {{ $pelanggan ? ($pelanggan->provinsi == $prov->name ? 'selected' : '') : '' }}>
                                        {{ $prov->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                Kab/Kota
                            </label>
                            <select data-placeholder="Select your favorite actors" class="w-full tom-select" required
                                name="kabupaten">
                                @foreach (City::all() as $kota)
                                    <option
                                        {{ $pelanggan ? ($pelanggan->kabupaten == $kota->name ? 'selected' : '') : '' }}>
                                        {{ $kota->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                No. Tlp
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="number" required name="nomor"
                                value="{{ $pelanggan ? $pelanggan->nomor : '' }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                NPWP
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="text" required name="npwp"
                                value="{{ $pelanggan ? $pelanggan->npwp : '' }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                Batas Piutang
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="text" required name="batas_piutang"
                                value="{{ $pelanggan ? $pelanggan->batas_piutang : '' }}"
                                oninput="formatCurrency(this)"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                Batas JT
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="number" required name="batas_jt"
                                value="{{ $pelanggan ? $pelanggan->batas_jt : '' }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            <p class="ml-3">Hari</p>
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                Apoteker
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="text" required name="apoteker"
                                value="{{ $pelanggan ? $pelanggan->apoteker : '' }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                No SIPA
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="text" required name="no_sipa"
                                value="{{ $pelanggan ? $pelanggan->no_sipa : '' }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                EXP Date SIPA
                            </label>
                            <div class="flex w-full gap-3">
                                <input data-tw-merge id="horizontal-form-1" type="date" required
                                    name="exp_date_sipa" value="{{ $pelanggan ? $pelanggan->exp_date_sipa : '' }}"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                <div data-tw-merge class="flex items-center"><input data-tw-merge type="checkbox"
                                        ame="date_status_sipa"
                                        class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50 w-[38px] h-[24px] p-px rounded-full relative before:w-[20px] before:h-[20px] before:shadow-[1px_1px_3px_rgba(0,0,0,0.25)] before:transition-[margin-left] before:duration-200 before:ease-in-out before:absolute before:inset-y-0 before:my-auto before:rounded-full before:dark:bg-darkmode-600 checked:bg-primary checked:border-primary checked:bg-none before:checked:ml-[14px] before:checked:bg-white w-[38px] h-[24px] p-px rounded-full relative before:w-[20px] before:h-[20px] before:shadow-[1px_1px_3px_rgba(0,0,0,0.25)] before:transition-[margin-left] before:duration-200 before:ease-in-out before:absolute before:inset-y-0 before:my-auto before:rounded-full before:dark:bg-darkmode-600 checked:bg-primary checked:border-primary checked:bg-none before:checked:ml-[14px] before:checked:bg-white"
                                        data-tw-merge="data-tw-merge" id="checkbox-switch-7"
                                        {{ $pelanggan ? ($pelanggan->exp_date_sipa == 1 ? 'checked' : '') : '' }} />
                                </div>
                            </div>
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                No SIA
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="text" required name="no_sia"
                                value="{{ $pelanggan ? $pelanggan->no_sia : '' }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                EXP Date SIA
                            </label>
                            <div class="flex w-full gap-3">
                                <input data-tw-merge id="horizontal-form-1" type="date" required
                                    name="exp_date_sia" value="{{ $pelanggan ? $pelanggan->exp_date_sia : '' }}"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                <div data-tw-merge class="flex items-center"><input data-tw-merge type="checkbox"
                                        name="date_status_sia"
                                        {{ $pelanggan ? ($pelanggan->exp_date_sia == 1 ? 'checked' : '') : '' }}
                                        class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50 w-[38px] h-[24px] p-px rounded-full relative before:w-[20px] before:h-[20px] before:shadow-[1px_1px_3px_rgba(0,0,0,0.25)] before:transition-[margin-left] before:duration-200 before:ease-in-out before:absolute before:inset-y-0 before:my-auto before:rounded-full before:dark:bg-darkmode-600 checked:bg-primary checked:border-primary checked:bg-none before:checked:ml-[14px] before:checked:bg-white w-[38px] h-[24px] p-px rounded-full relative before:w-[20px] before:h-[20px] before:shadow-[1px_1px_3px_rgba(0,0,0,0.25)] before:transition-[margin-left] before:duration-200 before:ease-in-out before:absolute before:inset-y-0 before:my-auto before:rounded-full before:dark:bg-darkmode-600 checked:bg-primary checked:border-primary checked:bg-none before:checked:ml-[14px] before:checked:bg-white"
                                        data-tw-merge="data-tw-merge" id="checkbox-switch-7" />
                                </div>
                            </div>
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                Hari Tagih
                            </label>
                            <select data-tw-merge aria-label="Default select example" required name="hari_tagih"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 mt-2 sm:mr-2 mt-2 sm:mr-2">
                                <option {{ $pelanggan ? ($pelanggan->hari_tagih == 'Senin' ? 'selected' : '') : '' }}>
                                    Senin</option>
                                <option {{ $pelanggan ? ($pelanggan->hari_tagih == 'Selasa' ? 'selected' : '') : '' }}>
                                    Selasa</option>
                                <option {{ $pelanggan ? ($pelanggan->hari_tagih == 'Rabu' ? 'selected' : '') : '' }}>
                                    Rabu</option>
                                <option {{ $pelanggan ? ($pelanggan->hari_tagih == 'Kamis' ? 'selected' : '') : '' }}>
                                    Kamis</option>
                                <option {{ $pelanggan ? ($pelanggan->hari_tagih == 'Jumat' ? 'selected' : '') : '' }}>
                                    Jumat</option>
                                <option {{ $pelanggan ? ($pelanggan->hari_tagih == 'Sabtu' ? 'selected' : '') : '' }}>
                                    Sabtu</option>
                                <option {{ $pelanggan ? ($pelanggan->hari_tagih == 'Minggu' ? 'selected' : '') : '' }}>
                                    Minggu</option>
                            </select>
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                Kelompok
                            </label>
                            <select data-tw-merge aria-label="Default select example" required name="kelompok"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 mt-2 sm:mr-2 mt-2 sm:mr-2">
                                @foreach ($kelompoks as $kelompok)
                                    <option
                                        {{ $pelanggan ? ($pelanggan->kelompok == $kelompok->kelompok ? 'selected' : '') : '' }}>
                                        {{ $kelompok->kelompok }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                Supervisor
                            </label>
                            <select data-tw-merge aria-label="Default select example" required name="supervisor"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 mt-2 sm:mr-2 mt-2 sm:mr-2">
                                @foreach ($pegawais as $pegawai)
                                    <option
                                        {{ $pelanggan ? ($pelanggan->supervisor == $pegawai->nama_pegawai ? 'selected' : '') : '' }}>
                                        {{ $pegawai->nama_pegawai }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                Sales
                            </label>
                            <select data-tw-merge aria-label="Default select example" required name="sales"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 mt-2 sm:mr-2 mt-2 sm:mr-2">
                                @foreach ($pegawais as $pegawai)
                                    <option
                                        {{ $pelanggan ? ($pelanggan->sales == $pegawai->nama_pegawai ? 'selected' : '') : '' }}>
                                        {{ $pegawai->nama_pegawai }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                Kolektor
                            </label>
                            <select data-tw-merge aria-label="Default select example" required name="kolektor"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 mt-2 sm:mr-2 mt-2 sm:mr-2">
                                @foreach ($pegawais as $pegawai)
                                    <option
                                        {{ $pelanggan ? ($pelanggan->kolektor == $pegawai->nama_pegawai ? 'selected' : '') : '' }}>
                                        {{ $pegawai->nama_pegawai }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                Area Rayon
                            </label>
                            <select data-tw-merge aria-label="Default select example" required name="area_rayon"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 mt-2 sm:mr-2 mt-2 sm:mr-2">
                                @foreach ($rayons as $rayon)
                                    <option
                                        {{ $pelanggan ? ($pelanggan->area_rayon == $rayon->area_rayon ? 'selected' : '') : '' }}>
                                        {{ $rayon->area_rayon }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                Sub Rayon
                            </label>
                            <select data-tw-merge aria-label="Default select example" required name="sub_rayon"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 mt-2 sm:mr-2 mt-2 sm:mr-2">
                                @foreach ($sub_rayons as $rayon)
                                    <option
                                        {{ $pelanggan ? ($pelanggan->sub_rayon == $rayon->sub_rayon ? 'selected' : '') : '' }}>
                                        {{ $rayon->sub_rayon }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>
                {{-- footer --}}
                <div class="modal-footer">
                    <button class="mt-5 btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function formatCurrency(input) {
        let value = input.value.replace(/[^\d]/g, '');
        value = (parseFloat(value) || 0).toLocaleString('id-ID');
        input.value = value;
    }
</script>
