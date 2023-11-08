<div id="{{ $id_modal . $id }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="rounded-lg modal-dialog modal-xl">
        <div class="modal-content">
            <form action="{{ route($route, ['id' => $id]) }}" method="post">
                @csrf
                <div class="p-10 modal-body">
                    <div class="preview">
                        <div class="flex w-full gap-3">
                            <div data-tw-merge class="items-center block mt-3 sm:flex">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 sm:w-20">
                                    Cari
                                </label>
                                <input data-tw-merge id="myInputSearch" type="text" placeholder="Cari Nama Produk..."
                                    oninput="searchFunction()"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="items-center block mt-3 sm:flex">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 sm:w-20">
                                    Tahun
                                </label>
                                <input type="number" id="tahun" class="form-control" placeholder="Masukan Tahun"
                                    name="tahun" min="1900" max="2099">

                            </div>
                            <div data-tw-merge class="items-center block mt-3 sm:flex">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 sm:w-20">
                                    Bulan
                                </label>
                                <select data-tw-merge name="bulan" aria-label="Default select example"
                                    class="form-control w-44">
                                    <option value="">- Pilih -</option>
                                    <option value="Januari">Januari</option>
                                    <option value="Februari">Februari</option>
                                    <option value="Maret">Maret</option>
                                    <option value="April">April</option>
                                    <option value="Mei">Mei</option>
                                    <option value="Juni">Juni</option>
                                    <option value="Juli">Juli</option>
                                    <option value="Agustus">Agustus</option>
                                    <option value="September">September</option>
                                    <option value="Oktober">Oktober</option>
                                    <option value="November">November</option>
                                    <option value="Desember">Desember</option>
                                </select>
                            </div>
                        </div>
                        <div class="overflow-auto">
                            <table class="table mt-3" id="myTableTargetProduk">
                                <thead class="font-bold">
                                    <tr>
                                        <td class="border border-slate-600">Kode</td>
                                        <td class="border border-slate-600">Nama Produk/Barang</td>
                                        <td class="border border-slate-600">Stok</td>
                                        <td class="border border-slate-600">Satuan Terkecil</td>
                                        <td class="border border-slate-600">Status Aktif</td>
                                        <td class="border border-slate-600">Tipe</td>
                                        <td class="border border-slate-600">Target</td>
                                        <td class="border border-slate-600">Penjualan (A)</td>
                                        <td class="border border-slate-600">Retur Penjualan (B)</td>
                                        <td class="border border-slate-600">(A-B)</td>
                                        <td class="border border-slate-600">%</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($obatBarangs as $obatBarang)
                                        <tr>
                                            <td class="border border-slate-600">
                                                {{ $obatBarang->kode_obat_barang }}</td>
                                            <td class="border border-slate-600">{{ $obatBarang->nama_obat_barang }}</td>
                                            <td class="border border-slate-600">{{ $obatBarang->stok_minimal }}</td>
                                            <td class="border border-slate-600">{{ $obatBarang->satuan_jual_terkecil }}
                                            </td>
                                            <td class="border border-slate-600">{{ $obatBarang->status }}</td>
                                            <td class="border border-slate-600">{{ $obatBarang->tipe }}</td>
                                            <td class="border border-slate-600">
                                                <input data-tw-merge id="horizontal-form-1" type="number"
                                                    placeholder="" name="target"
                                                    class="w-32 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                            </td>
                                            <td class="border border-slate-600">Contoh data</td>
                                            <td class="border border-slate-600">Contoh data</td>
                                            <td class="border border-slate-600">Contoh data</td>
                                            <td class="border border-slate-600">Contoh data</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- footer --}}
                <div class="modal-footer">
                    <button class="mt-5 btn btn-secondari" data-tw-dismiss="modal" type="button">Batal</button>
                    <button class="mt-5 btn btn-primary" type="submit" name="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function searchFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInputSearch");
        filter = input.value.toUpperCase();
        console.log(filter);
        table = document.getElementById("myTableTargetProduk");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            if (i === 0) {
                continue; // Skip the header row
            }

            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
