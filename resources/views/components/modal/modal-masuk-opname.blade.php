<div id="basic-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg rounded-lg">
        <div class="modal-content">
            <form class="mb-3" action="{{ route('tambah-opname-masuk') }}" method="POST">
                @csrf
                <div class="modal-header bg-primary flex align-center justify-center text-white">
                    <h2 class="text-lg font-bold">Stok Masuk</h2>
                </div>
                <div class="modal-body p-10">
                    <div class="preview">
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                Nama Produk
                            </label>
                            <select data-tw-merge id="{{ $id_dropdown }}" name="nama_produk" class="form-control">

                                <option value="">- Pilih -</option>
                                @foreach ($barangs as $barang)
                                    <option value="{{ $barang->id }}"
                                        {{ $stok ? ($stok->id == $barang->id ? 'selected' : '') : '' }}>
                                        {{ $barang->nama_obat_barang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                Satuan
                            </label>
                            <input data-tw-merge id="satuan{{ $id_dropdown }}" type="text" placeholder="Auto"
                                class="form-control" disabled name="satuan" />
                        </div>
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                Isi
                            </label>
                            <div class="flex w-full gap-3">
                                <input data-tw-merge id="isi{{ $id_dropdown }}" type="number" placeholder="Auto"
                                    class="form-control" disabled name="isi" />
                            </div>
                        </div>
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                Tipe
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="text" placeholder="" name="tipe"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                No. Batch
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="text" placeholder="" name="no_batch"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                Exp Date
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="date" placeholder="" name="exp_date"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>


                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                Ket. Satuan
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                HPP
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="text" placeholder="" name="hpp"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                Stok Tercatat
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="text" placeholder="" disabled
                                value="0"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                Stok Real
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                Gudang
                            </label>
                            <select data-tw-merge id="" aria-label="Default select example" name="gudang_asal"
                                class="form-control">
                                <option value="">- Pilih -</option>
                                @foreach ($gudangs as $gudang)
                                    <option value="{{ $gudang->id }}"
                                        {{ $gudang ? ($gudang->id == $gudang->id ? 'selected' : '') : '' }}>
                                        {{ $gudang->gudang }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                Rak
                            </label>
                            <select data-tw-merge aria-label="Default select example" class="form-control">
                                @foreach ($raks as $rak)
                                    <option value="{{ $rak->id }}"
                                        {{ $rak ? ($rak->id == $rak->id ? 'selected' : '') : '' }}>
                                        {{ $rak->rak }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                Sub Rak
                            </label>
                            <select data-tw-merge aria-label="Default select example" class="form-control">
                                @foreach ($sub_rak as $sub_rak)
                                    <option value="{{ $sub_rak->id }}"
                                        {{ $sub_rak ? ($sub_rak->id == $sub_rak->id ? 'selected' : '') : '' }}>
                                        {{ $sub_rak->sub_rak }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-40">
                                Keterangan
                            </label>
                            <textarea name="keterangan" id="" rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                {{-- footer --}}
                <div class="modal-footer">
                    <button class="btn btn-primary mt-5">Simpan</button>
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


    //setting input
    var inputHPP = document.getElementsByClassName("hpp");

    inputHPP.addEventListener("input", function() {
        var formattedValue = this.value.replace(/\D/g, '');
        var formattedString = formattedValue.replace(/(\d)(?=(\d{3})+(?!\d))/g,
            "$1.");
        this.value = formattedString;
    });

    inputHPP.form.addEventListener("submit", function() {
        inputHPP.value = inputHPP.value.replace(/\D/g,
            '');
    });
</script>
