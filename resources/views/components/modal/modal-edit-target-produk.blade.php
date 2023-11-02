<div id="{{ $id_modal . $id }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl rounded-lg">
        <form action="{{ route($route, ['id' => $id]) }}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-body p-10">
                    <div class="preview">
                        <div class="flex gap-3 w-full">
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <h1 class="font-bold">Edit Target Produk</h1>
                            </div>
                        </div>
                        <div class="overflow-auto">
                            <table class="table mt-3">
                                <thead class="font-bold">
                                    <tr>
                                        <td class="border border-slate-600">Kode</td>
                                        <td class="border border-slate-600">Nama Produk/Barang</td>
                                        <td class="border border-slate-600">Stok</td>
                                        <td class="border border-slate-600">Satuan Terkecil</td>
                                        <td class="border border-slate-600">Status Aktif</td>
                                        <td class="border border-slate-600">Tipe</td>
                                        <td class="border border-slate-600">Target</td>
                                        <td class="border border-slate-600">Bulan</td>
                                        <td class="border border-slate-600">Tahun</td>
                                        <td class="border border-slate-600">Penjualan (A)</td>
                                        <td class="border border-slate-600">Retur Penjualan (B)</td>
                                        <td class="border border-slate-600">(A-B)</td>
                                        <td class="border border-slate-600">%</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border border-slate-600">
                                            {{ $targetProduk->obatBarang->kode_obat_barang }}</td>
                                        <td class="border border-slate-600">
                                            {{ $targetProduk->obatBarang->nama_obat_barang }}</td>
                                        <td class="border border-slate-600">
                                            {{ $targetProduk->obatBarang->stok_minimal }}</td>
                                        <td class="border border-slate-600">
                                            {{ $targetProduk->obatBarang->satuan_jual_terkecil }}
                                        </td>
                                        <td class="border border-slate-600">{{ $targetProduk->obatBarang->status }}
                                        </td>
                                        <td class="border border-slate-600">{{ $targetProduk->obatBarang->tipe }}
                                        </td>
                                        <td class="border border-slate-600">
                                            <input data-tw-merge id="horizontal-form-1" type="number" placeholder=""
                                                name="target" value="{{ $targetProduk->target }}"
                                                class="w-32 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                            {{-- input id obat brang --}}
                                            <input data-tw-merge id="horizontal-form-1" type="hidden" placeholder=""
                                                name="id_obat_barang"
                                                class="w-32 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                            {{-- input id obat brang --}}
                                            <input data-tw-merge id="horizontal-form-1" type="hidden" placeholder=""
                                                name="id_perusahaan" value="{{ $targetProduk->id_perusahaan }}"
                                                class="w-32 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                            {{-- input tahun brang --}}
                                            <input data-tw-merge id="horizontal-form-1" type="hidden" placeholder=""
                                                name="tahun" value="{{ $targetProduk->tahun }}"
                                                class="w-32 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                        </td>

                                        <td class="border border-slate-600"><select data-tw-merge name="bulan_target"
                                                aria-label="Default select example" class="form-control w-44" required>
                                                <option value="">- Pilih -</option>
                                                <option
                                                    {{ $targetProduk && $targetProduk->bulan_target == 'Januari' ? 'selected' : '' }}>
                                                    Januari</option>
                                                <option
                                                    {{ $targetProduk && $targetProduk->bulan_target == 'Februari' ? 'selected' : '' }}>
                                                    Februari</option>
                                                <option
                                                    {{ $targetProduk && $targetProduk->bulan_target == 'Maret' ? 'selected' : '' }}>
                                                    Maret</option>
                                                <option
                                                    {{ $targetProduk && $targetProduk->bulan_target == 'April' ? 'selected' : '' }}>
                                                    April</option>
                                                <option
                                                    {{ $targetProduk && $targetProduk->bulan_target == 'Mei' ? 'selected' : '' }}>
                                                    Mei</option>
                                                <option 
                                                    {{ $targetProduk && $targetProduk->bulan_target == 'Juni' ? 'selected' : '' }}>
                                                    Juni</option>
                                                <option 
                                                    {{ $targetProduk && $targetProduk->bulan_target == 'Juli' ? 'selected' : '' }}>
                                                    Juli</option>
                                                <option 
                                                    {{ $targetProduk && $targetProduk->bulan_target == 'Agustus' ? 'selected' : '' }}>
                                                    Agustus</option>
                                                <option 
                                                    {{ $targetProduk && $targetProduk->bulan_target == 'September' ? 'selected' : '' }}>
                                                    September</option>
                                                <option 
                                                    {{ $targetProduk && $targetProduk->bulan_target == 'Oktober' ? 'selected' : '' }}>
                                                    Oktober</option>
                                                <option 
                                                    {{ $targetProduk && $targetProduk->bulan_target == 'November' ? 'selected' : '' }}>
                                                    November</option>
                                                <option 
                                                    {{ $targetProduk && $targetProduk->bulan_target == 'Desember' ? 'selected' : '' }}>
                                                    Desember</option>
                                            </select></td>
                                        <td class="border border-slate-600"><select data-tw-merge
                                                aria-label="Default select example" class="form-control w-44"
                                                name="tahun_target" required>
                                                <option value="">- Pilih -</option>
                                                <option 
                                                    {{ $targetProduk && $targetProduk->tahun_target == '2030' ? 'selected' : '' }}>
                                                    2030</option>
                                                <option 
                                                    {{ $targetProduk && $targetProduk->tahun_target == '2029' ? 'selected' : '' }}>
                                                    2029</option>
                                                <option 
                                                    {{ $targetProduk && $targetProduk->tahun_target == '2028' ? 'selected' : '' }}>
                                                    2028</option>
                                                <option 
                                                    {{ $targetProduk && $targetProduk->tahun_target == '2027' ? 'selected' : '' }}>
                                                    2027</option>
                                                <option 
                                                    {{ $targetProduk && $targetProduk->tahun_target == '2026' ? 'selected' : '' }}>
                                                    2026</option>
                                                <option 
                                                    {{ $targetProduk && $targetProduk->tahun_target == '2025' ? 'selected' : '' }}>
                                                    2025</option>
                                                <option 
                                                    {{ $targetProduk && $targetProduk->tahun_target == '2024' ? 'selected' : '' }}>
                                                    2024</option>
                                                <option 
                                                    {{ $targetProduk && $targetProduk->tahun_target == '2023' ? 'selected' : '' }}>
                                                    2023</option>
                                                <option 
                                                    {{ $targetProduk && $targetProduk->tahun_target == '2022' ? 'selected' : '' }}>
                                                    2022</option>
                                                <option
                                                    {{ $targetProduk && $targetProduk->tahun_target == '2021' ? 'selected' : '' }}>
                                                    2021</option>
                                                <option 
                                                    {{ $targetProduk && $targetProduk->tahun_target == '2020' ? 'selected' : '' }}>
                                                    2020</option>
                                            </select></td>
                                        <td class="border border-slate-600">Contoh data</td>
                                        <td class="border border-slate-600">Contoh data</td>
                                        <td class="border border-slate-600">Contoh data</td>
                                        <td class="border border-slate-600">Contoh data</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- footer --}}
                <div class="modal-footer">
                    <button class="btn btn-secondari mt-5" data-tw-dismiss="modal" type="button">Batal</button>
                    <button class="btn btn-primary mt-5" type="submit" name="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
