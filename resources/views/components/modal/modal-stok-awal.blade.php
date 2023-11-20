<div id="{{ $id_modal . $id }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="rounded-lg modal-dialog modal-xl">
        <div class="modal-content">
            <form action="{{ route($route, ['id' => $id]) }}" method="POST">
                @csrf
                <div class="p-10 modal-body">
                    <div class="preview">
                        @php
                            $nomor_urut = count($stoks) + 1;

                            $bulan = date('m');
                            $tahun = date('Y');
                            $kode = sprintf('%02d', $nomor_urut) . "/SA/$bulan/$tahun";
                        @endphp

                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                No. Reff
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="text" placeholder="Auto" name="no_reff"
                                value="{{ $stok ? $stok->no_reff : $kode }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                No. Batch
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="text" placeholder="" name="no_batch"
                                value="{{ $stok ? $stok->no_batch : '' }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                Nama Barang
                            </label>
                            <select data-tw-merge aria-label="Default select example" name="id_obat_barang"
                                class="form-control tom-select" id="nama_barang{{ $id }}">
                                <option value="">- Pilih -</option>
                                @foreach ($barangs as $barang)
                                    <option value="{{ $barang->id }}"
                                        {{ $stok ? ($stok->id_obat_barang == $barang->id ? 'selected' : '') : '' }}>
                                        {{ $barang->kode_obat_barang . ' || ' . $barang->nama_obat_barang }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                Satuan
                            </label>
                            <select data-tw-merge aria-label="Default select example" name="satuan"
                                class="form-control" id="satuan{{ $id }}">
                            </select>
                        </div>

                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                Isi
                            </label>
                            <div class="flex w-full gap-3">
                                <input data-tw-merge id="isi{{ $id }}" type="number" placeholder="Auto"
                                    class="form-control" disabled />
                                <p id="satuan_terkecil{{ $id }}" class="mt-2"></p>
                            </div>
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                Jumlah
                            </label>
                            <input data-tw-merge id="jumlah" type="number" placeholder="" class="form-control"
                                name="jumlah" value="{{ $stok ? $stok->jumlah : '' }}" />
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                Exp. Date
                            </label>
                            <input data-tw-merge id="exp_date{{ $id }}" type="date" placeholder="Auto"
                                class="form-control" name="exp_date" value="{{ $stok ? $stok->exp_date : '' }}" />
                        </div>
                        <!-- Tambahkan class 'formatted-input' untuk input HPP -->
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="hpp" class="inline-block mb-2 sm:w-40">
                                HPP
                            </label>
                            <input data-tw-merge id="hpp{{ $id }}" type="text" placeholder=""
                                name="hpp" value="{{ $stok ? $stok->hpp : '' }}"
                                class="w-full text-sm transition duration-200 ease-in-out rounded-md shadow-sm hpp disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent border-slate-200 placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <script>
                            $('.hpp').on('input', function() {
                                var formattedValue = $(this).val().replace(/\D/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                                $(this).val(formattedValue);
                            })
                        </script>

                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                Gudang
                            </label>
                            <select data-tw-merge aria-label="Default select example" class="form-control"
                                name="gudang">
                                @foreach ($gudangs as $gudang)
                                    <option {{ $stok ? ($stok->gudang == $gudang->gudang ? 'selected' : '') : '' }}>
                                        {{ $gudang->gudang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                Rak
                            </label>
                            <select data-tw-merge aria-label="Default select example" class="form-control"
                                name="rak">
                                @foreach ($raks as $rak)
                                    <option {{ $stok ? ($stok->rak == $rak->rak ? 'selected' : '') : '' }}>
                                        {{ $rak->rak }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                Sub Rak
                            </label>
                            <select data-tw-merge aria-label="Default select example" class="form-control"
                                name="sub_rak">
                                @foreach ($sub_rak as $rak)
                                    <option {{ $stok ? ($stok->rak == $rak->sub_rak ? 'selected' : '') : '' }}>
                                        {{ $rak->sub_rak }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                                Tipe
                            </label>
                            <div class="flex w-full gap-3">
                                <input data-tw-merge id="tipe{{ $id }}" type="text" placeholder="Tipe"
                                    class="form-control" disabled />
                            </div>
                        </div>
                    </div>
                </div>
                {{-- footer --}}
                <div class="modal-footer">
                    <button type="submit" class="mt-5 btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function($) {
        let id_dropdown = "{{ $id }}";

        // Fungsi untuk mengambil dan mengisi data saat halaman dimuat
        function fetchData(selectedOption) {
            jQuery.ajax({
                url: '/get-nama-barang/' + selectedOption,
                type: 'GET',
                success: function(data) {
                    $("#satuan" + id_dropdown).val(data.satuan);
                    $("#isi" + id_dropdown).val(data.isi);
                    $("#satuan_terkecil" + id_dropdown).text(data.satuan_terkecil);
                    $('#tipe{{ $id }}').val(data.tipe);
                    $('#exp_date{{ $id }}').prop('disabled', data.exp_date === '0');
                    var selectOptions = data.satuan;
                    var selectElement = $('<select></select>').attr({
                        'id': "satuan" + id_dropdown,
                        'class': 'form-control',
                        'name': 'satuan'
                    });

                    var defaultSatuan = "{{ $stok->satuan ?? '' }}";
                    $.each(selectOptions, function(key, value) {
                        var option = $('<option></option>').attr('value', value).text(
                            value);
                        if (defaultSatuan !== '' && value === defaultSatuan) {
                            option.prop('selected', true);
                        }
                        selectElement.append(option);
                    });

                    $("#satuan" + id_dropdown).replaceWith(selectElement);

                    if (defaultSatuan !== '') {
                        $("#satuan" + id_dropdown).val(defaultSatuan);
                    }

                },
                error: function(err) {}
            });
        }

        function handleDropdownChange() {
            let selectedOption = selectedValue.value;
            fetchData(selectedOption);
        }

        let selectedValue = document.getElementById('nama_barang{{ $id }}');

        selectedValue.addEventListener('change', handleDropdownChange);

        fetchData(selectedValue.value);
    });
</script>
