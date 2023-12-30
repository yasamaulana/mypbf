<div id="{{ $id_modal . $id }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-lg font-bold  bg-primary flex align-center justify-center text-white">
                Tambah Produk
            </div>
            <form action="{{ route($route, ['id' => $id]) }}" method="post">
                @csrf
                <div class="modal-body p-5">
                    <div data-tw-merge class="block sm:flex items-center mt-3">
                        {{-- <input type="hidden" value="{{ auth()->user()->id }}" name="id_perusahaan"> --}}
                        <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                            Produk
                        </label>
                        <select data-tw-merge aria-label="Default select example" name="id_obat_barang"
                            class="form-control tom-select" id="selectObatBarang{{ $id }}">
                            <option value="">- Pilih -</option>
                            @foreach ($barangs as $barang)
                                <option value="{{ $barang->id }}"
                                    {{ $stok ? ($stok->id_obat_barang == $barang->id ? 'selected' : '') : '' }}>
                                    {{ $barang->kode_obat_barang . ' || ' . $barang->nama_obat_barang }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div data-tw-merge class="block sm:flex items-center mt-3">
                        <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                            Satuan Beli
                        </label>
                        <select data-tw-merge aria-label="Default select example"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80"
                            id="satuanBeli{{ $id }}" name="satuan">
                            <option>- Pilih -</option>
                        </select>
                    </div>
                    <div data-tw-merge class="block sm:flex items-center mt-3">
                        <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                            Isi
                        </label>
                        <input data-tw-merge id="isi{{ $id }}" type="text" placeholder="" name="isi"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    </div>
                    <div data-tw-merge class="block sm:flex items-center mt-3">
                        <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                            Sat Terkecil
                        </label>
                        <input data-tw-merge id="satuanTerkecil{{ $id }}" type="text" placeholder=""
                            name="satuan_terkecil"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    </div>
                    <div data-tw-merge class="block sm:flex items-center mt-3">
                        <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                            Qty Faktur
                        </label>
                        <input data-tw-merge id="horizontal-form-1" type="text" placeholder="Satuan Beli"
                            name="qty_faktur"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    </div>
                    <div data-tw-merge class="block sm:flex items-center mt-3">
                        <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                            Harga
                        </label>
                        <input data-tw-merge id="harga" type="text" placeholder="Satuan Beli" name="harga"
                            oninput="formatRupiah(this)"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    </div>
                    <div data-tw-merge class="block sm:flex items-center mt-3">
                        <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                            Disc 1
                        </label>
                        <input data-tw-merge id="disc1" type="text" placeholder="" name="disc1"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    </div>
                    <div data-tw-merge class="block sm:flex items-center mt-3">
                        <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                            Disc 2
                        </label>
                        <input data-tw-merge id="disc2" type="text" placeholder="" name="disc2"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    </div>
                    <div data-tw-merge class="block sm:flex items-center mt-3">
                        <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                            Total
                        </label>
                        <input data-tw-merge id="total" type="text" placeholder="" name="total"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-tw-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    jQuery(document).ready(function($) {
        let id_dropdown = "{{ $id }}";

        // Function to fetch and populate data when the page loads
        function fetchData(selectedOption) {
            $.ajax({
                url: '/get-nama-barang/' + selectedOption,
                type: 'GET',
                success: function(data) {
                    $("#satuanBeli{{ $id }}").val(data.satuan);
                    $("#isi{{ $id }}").val(data.isi);
                    $("#satuanTerkecil{{ $id }}").val(data.satuan_terkecil);

                    var selectOptions = data.satuan;
                    var selectElement = $('<select></select>').attr({
                        'id': "#satuanBeli{{ $id }}",
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

                    $("#satuanBeli{{ $id }}").replaceWith(selectElement);

                    if (defaultSatuan !== '') {
                        selectElement.val(defaultSatuan);
                    }
                },
            });
        }

        // Event handler for product change
        $('#selectObatBarang{{ $id }}').change(function() {
            let selectedOption = $(this).val();
            fetchData(selectedOption);
        });

        // Event handler for unit change
        $(document).on('change', '#satuanBeli{{ $id }}', function() {
            let selectedOption = $(this).val();
            let id_barang = $('#selectObatBarang{{ $id }}').val();

            $.ajax({
                url: '/get-isi-barang/' + id_barang + '/' + selectedOption,
                type: 'GET',
                success: function(data) {
                    $("#isi{{ $id }}").val(data.isi);
                },
            });
        });

    });

    function formatRupiah(input) {
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

    let discount1 = document.getElementById("disc1");
    let discount2 = document.getElementById("disc2");
    let hargaKotor2 = document.getElementById("harga");

    hargaKotor2.addEventListener('input', function() {
        updateTotalDiskon()
    })

    discount1.addEventListener('input', function() {
        console.log(discount1.value);
        updateTotalDiskon();
    });

    discount2.addEventListener('input', function() {
        console.log(discount2.value);
        updateTotalDiskon();
    });

    function updateTotalDiskon() {
        let disc1 = parseFloat(discount1.value) || 0;
        let disc2 = parseFloat(discount2.value) || 0;
        let hargatitik2 = hargaKotor2.value;
        let harga = parseInt(hargatitik2.replace(/\./g, '')) || 0;

        // Hitung total diskon sebagai jumlah diskon1 dan diskon2
        let totalDiskon2 = harga * ((disc1 + disc2) / 100);

        let total = harga - totalDiskon2;
        document.getElementById('total').value = total;
        // Di sini Anda bisa melakukan apa pun yang diinginkan dengan nilai total diskon, misalnya, memperbarui elemen HTML
    }
</script>
