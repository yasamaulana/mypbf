<div id="{{ $id_modal . $id }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl rounded-lg">
        <div class="modal-content">
            <form action="{{ route($route, ['id' => $id]) }}" method="POST">
                @csrf
                <div class="modal-body p-10">
                    <div class="preview">
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                No. Reff
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="number" placeholder="Auto" name="no_reff"
                                value="{{ $stok ? $stok->no_reff : rand(pow(10, 10), pow(10, 11) - 1) }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                Nama Barang
                            </label>
                            <select data-tw-merge id="{{ $id_dropdown }}" aria-label="Default select example"
                                name="id_obat_barang" class="form-control">
                                <option value="">- Pilih -</option>
                                @foreach ($barangs as $barang)
                                    <option value="{{ $barang->id }}"
                                        {{ $stok ? ($stok->id == $barang->id ? 'selected' : '') : '' }}>
                                        {{ $barang->kode_obat_barang . ' || ' . $barang->nama_obat_barang }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                Satuan
                            </label>
                            <input data-tw-merge id="satuan{{ $id_dropdown }}" type="text" placeholder="Auto"
                                class="form-control" disabled />
                        </div>

                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                Isi
                            </label>
                            <div class="flex w-full gap-3">
                                <input data-tw-merge id="isi{{ $id_dropdown }}" type="number" placeholder="Auto"
                                    class="form-control" disabled />
                                <p id="satuan_terkecil{{ $id_dropdown }}" class="mt-2"></p>
                            </div>
                        </div>
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                Jumlah
                            </label>
                            <input data-tw-merge id="jumlah" type="number" placeholder="" class="form-control"
                                name="jumlah" value="{{ $stok ? $stok->jumlah : '' }}" />
                        </div>
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                Exp. Date
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="date" placeholder="Auto"
                                class="form-control" name="exp_date" value="{{ $stok ? $stok->exp_date : '' }}" />
                        </div>
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                HPP
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="number" placeholder="" name="hpp"
                                value="{{ $stok ? $stok->hpp : '' }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
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
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
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
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
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
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                Jenis
                            </label>
                            <select data-tw-merge aria-label="Default select example" class="form-control"
                                name="jenis">
                                @foreach ($jenis_obat as $jenis)
                                    <option {{ $stok ? ($stok->jenis == $jenis->jenis ? 'selected' : '') : '' }}>
                                        {{ $jenis->jenis }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                {{-- footer --}}
                <div class="modal-footer">
                    <button class="btn btn-secondari mt-5" data-tw-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary mt-5">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function($) {
        let id_dropdown = "{{ $id_dropdown }}";

        // Fungsi untuk mengambil dan mengisi data saat halaman dimuat
        function fetchData(selectedOption) {
            jQuery.ajax({
                url: '/get-nama-barang/' + selectedOption,
                type: 'GET',
                success: function(data) {
                    $("#satuan" + id_dropdown).val(data.satuan);
                    $("#isi" + id_dropdown).val(data.isi);
                    $("#satuan_terkecil" + id_dropdown).text(data.satuan_terkecil);
                },
                error: function(err) {
                    console.error('Error:', err);
                }
            });
        }

        function handleDropdownChange() {
            let selectedOption = selectedValue.value;
            fetchData(selectedOption);
        }

        let selectedValue = document.getElementById(id_dropdown);

        selectedValue.addEventListener('change', handleDropdownChange);

        fetchData(selectedValue.value);
    });
</script>
