@php
    use App\Models\DiskonKelompok;
@endphp
<div id="{{ $id_modal . $id }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">
                    Data Produk
                </h2>
            </div>
            <form action="{{ route($route, ['id' => $id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body px-10">
                    <div class="preview">
                        <div class="grid grid-cols-12 gap-4">
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-3" class="form-label">Nama Obat/barang</label>
                                <div class="flex gap-3">
                                    <input id="input-wizard-3" type="text" class="form-control"
                                        placeholder="Nama Obat/barang" required name="nama_obat_barang"
                                        value="{{ $barang ? $barang->nama_obat_barang : '' }}{{ app('request')->input('nama_obat_barang') }}">
                                    <a href="/cari-produk-e-report" class="btn btn-primary btn-sm w-40">
                                        Cari Produk<br>E-Report
                                    </a>
                                </div>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6 flex gap-3">
                                <div class="">
                                    <label for="input-wizard-3" class="form-label">E-Report</label>
                                    <input id="input-wizard-3" type="text" class="form-control" min="10000000000"
                                        max="99999999999" placeholder="Otomatis" required name="kode_obat_barang"
                                        type="text" class="form-control" name="kode_obat_barang"
                                        value="{{ $barang ? $barang->kode_obat_barang : (app('request')->input('kode_obat_barang') ? app('request')->input('kode_obat_barang') : rand(pow(10, 10), pow(10, 11) - 1)) }}">
                                </div>
                                <div class="">
                                    <label for="input-wizard-3" class="form-label">Kode Obat BPOM</label>
                                    <input id="input-wizard-3" type="number" class="form-control"
                                        placeholder="Kode Obat BPOM" required name="kode_obat_bpom"
                                        value="{{ $barang ? $barang->kode_obat_bpom : '' }}">
                                </div>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-6" class="form-label">Satuan Dasar/Beli</label>
                                <select id="input-wizard-6" class="form-select" required name="satuan_dasar_beli">
                                    @if ($satuans->isNotEmpty())
                                        @foreach ($satuans as $satuan)
                                            <option
                                                {{ $barang ? ($barang->satuan_dasar_beli == $satuan->satuan ? 'selected' : '') : '' }}>
                                                {{ $satuan->satuan }}
                                            </option>
                                        @endforeach
                                    @else
                                        <option value="">Belum ada data</option>
                                    @endif
                                </select>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6 flex gap-3">
                                <div class="">
                                    <label for="input-wizard-3" class="form-label">Barcode QR Produk</label>
                                    <input id="input-wizard-3" type="number" class="form-control"
                                        placeholder="Barcode QR Produk" required name="barcode_qr_produk"
                                        value="{{ $barang ? $barang->barcode_qr_produk : '' }}">
                                </div>
                                <div class="">
                                    <label for="input-wizard-3" class="form-label">Barcode Produk</label>
                                    <input id="input-wizard-3" type="number" class="form-control"
                                        placeholder="Barcode QR Produk" required name="barcode_produk"
                                        value="{{ $barang ? $barang->barcode_produk : '' }}">
                                </div>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-3" class="form-label">Isi</label>
                                <input id="input-wizard-3" type="number" class="form-control" placeholder="" required
                                    name="isi" value="{{ $barang ? $barang->isi : '' }}">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-6" class="form-label">Satuan Jual Terkecil</label>
                                <select id="input-wizard-6" class="form-select" required name="satuan_jual_terkecil">
                                    @if ($satuans->isNotEmpty())
                                        @foreach ($satuans as $satuan)
                                            <option
                                                {{ $barang ? ($barang->satuan_jual_terkecil == $satuan->satuan ? 'selected' : '') : '' }}>
                                                {{ $satuan->satuan }}</option>
                                        @endforeach
                                    @else
                                        <option value="">Belum ada data</option>
                                    @endif
                                </select>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-3" class="form-label">Keterangan Satuan</label>
                                <input id="input-wizard-3" type="text" class="form-control" placeholder="" required
                                    name="ket_satuan" value="{{ $barang ? $barang->ket_satuan : '' }}">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-3" class="form-label">Kemasan</label>
                                <input id="input-wizard-3" type="text" class="form-control" placeholder=""
                                    required name="kemasan"
                                    value="{{ $barang ? $barang->kemasan : '' }}{{ app('request')->input('kemasan') }}">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-6" class="form-label">Golongan</label>
                                <select id="input-wizard-6" class="form-select" required name="golongan">
                                    @if ($golongans->isNotEmpty())
                                        @foreach ($golongans as $gol)
                                            <option
                                                {{ $barang ? ($barang->golongan == $gol->golongan ? 'selected' : '') : '' }}>
                                                {{ $gol->golongan }}</option>
                                        @endforeach
                                    @else
                                        <option value="">Belum ada data</option>
                                    @endif
                                </select>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-6" class="form-label">Sub Golongan</label>
                                <select id="input-wizard-6" class="form-select" required name="sub_golongan">
                                    @if ($sub_golongans->isNotEmpty())
                                        @foreach ($sub_golongans as $gol)
                                            <option
                                                {{ $barang ? ($barang->sub_golongan == $gol->sub_golongan ? 'selected' : '') : '' }}>
                                                {{ $gol->sub_golongan }}</option>
                                        @endforeach
                                    @else
                                        <option value="">Belum ada data</option>
                                    @endif
                                </select>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-6" class="form-label">Jenis Obat/Barang</label>
                                <select id="input-wizard-6" class="form-select" required name="jenis_obat_barang">
                                    @if ($jenis_obat->isNotEmpty())
                                        @foreach ($jenis_obat as $jenis)
                                            <option
                                                {{ $barang ? ($barang->jenis_obat_barang == $satuan->jenis ? 'selected' : '') : '' }}>
                                                {{ $jenis->jenis }}</option>
                                        @endforeach
                                    @else
                                        <option value="">Belum ada data</option>
                                    @endif
                                </select>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-6" class="form-label">Produsen</label>
                                <select id="input-wizard-6" class="form-select" required name="produsen">
                                    @if ($produsens->isNotEmpty())
                                        @foreach ($produsens as $prod)
                                            <option
                                                {{ $barang ? ($barang->produsen == $prod->produsen ? 'selected' : '') : '' }}>
                                                {{ $prod->produsen }}</option>
                                        @endforeach
                                    @else
                                        <option value="">Belum ada data</option>
                                    @endif

                                </select>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-6" class="form-label">Tipe</label>
                                <select id="input-wizard-6" class="form-select" required name="tipe">
                                    <option {{ $barang ? ($barang->tipe == 'Dagang' ? 'selected' : '') : '' }}>
                                        Dagang
                                    </option>
                                    <option {{ $barang ? ($barang->tipe == 'Konsinyasi' ? 'selected' : '') : '' }}>
                                        Konsinyasi
                                    </option>
                                </select>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-3" class="form-label">Stok Minimal</label>
                                <input id="input-wizard-3" type="number" class="form-control" placeholder=""
                                    required name="stok_minimal" value="{{ $barang ? $barang->stok_minimal : '' }}">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-3" class="form-label">Stok Maksimal</label>
                                <input id="input-wizard-3" type="number" class="form-control" placeholder=""
                                    required name="stok_maksimal"
                                    value="{{ $barang ? $barang->stok_maksimal : '' }}">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-3" class="form-label">Komposisi</label>
                                <textarea id="input-wizard-3" type="text" class="form-control" placeholder="" required name="komposisi">{{ $barang ? $barang->komposisi : '' }}</textarea>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-3" class="form-label">Zak Aktif</label>
                                <textarea id="input-wizard-3" type="text" class="form-control" placeholder="" required name="zat_aktif">{{ $barang ? $barang->zat_aktif : '' }}</textarea>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6 mt-2">
                                <label for="input-wizard-3" class="form-label">Bentuk Dan Kekuatan</label>
                                <input id="input-wizard-3" type="text" class="form-control" placeholder=""
                                    required name="bentuk_kekuatan"
                                    value="{{ $barang ? $barang->bentuk_kekuatan : '' }}">
                            </div>
                        </div>
                        <div class="flex mt-3 gap-3">
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-3" class="form-label">No. Ijin Edar</label>
                                <input id="input-wizard-3" type="text" class="form-control" placeholder=""
                                    required name="no_ijin_edar" value="{{ $barang ? $barang->no_ijin_edar : '' }}">
                            </div>
                            <div class="mt-2">
                                <label>Exp Date</label>
                                <div class="mt-2">
                                    <div class="form-check form-switch">
                                        <input id="checkbox-switch-7" class="form-check-input" type="checkbox"
                                            name="exp_date"
                                            {{ $barang ? ($barang->exp_date == '1' ? 'checked' : '') : '' }}>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2">
                                <label>Aktif</label>
                                <div class="mt-2">
                                    <div class="form-check form-switch">
                                        <input id="checkbox-switch-7" class="form-check-input" type="checkbox"
                                            name="status"
                                            {{ $barang ? ($barang->status == '1' ? 'checked' : '') : '' }}>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="table-set" class="form-control">Setting Harga Jual</label>
                            <table class="table border mt-3" id="table-set">
                                <thead class="font-bold">
                                    <tr>
                                        <td>Kelompok</td>
                                        <td>%</td>
                                        <td>Disc 1</td>
                                        <td>Disc 2</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @forelse ($kelompoks as $kelompok) --}}
                                    @if ($barang)
                                        @foreach (DiskonKelompok::where('id_obat_barang', $barang->id)->get() as $diskon)
                                            <tr>
                                                {{-- hidden information --}}
                                                <input type="hidden"
                                                    name="kelompoks[{{ $loop->index }}][id_kelompok]"
                                                    value="{{ $diskon->id_kelompok }}">
                                                {{-- End hidden information --}}
                                                <td>{{ $kelompoks->where('id', $diskon->id_kelompok)->first()->kelompok }}
                                                </td>
                                                <td>
                                                    <input type="number" min="1" max="100"
                                                        class="form-control" required
                                                        name="kelompoks[{{ $loop->index }}][persentase]"
                                                        value="{{ $diskon->persentase }}">
                                                </td>
                                                <td>
                                                    <input type="number" min="1" max="100"
                                                        class="form-control" required
                                                        name="kelompoks[{{ $loop->index }}][disc_1]"
                                                        value="{{ $diskon->disc_1 }}">
                                                </td>
                                                <td>
                                                    <input type="number" min="1" max="100"
                                                        class="form-control" required
                                                        name="kelompoks[{{ $loop->index }}][disc_2]"
                                                        value="{{ $diskon->disc_2 }}">
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        @forelse ($kelompoks as $kelompok)
                                            <tr>
                                                {{-- hidden information --}}
                                                <input type="hidden"
                                                    name="kelompoks[{{ $loop->index }}][id_kelompok]"
                                                    value="{{ $kelompok->id }}">
                                                {{-- End hiddenn information --}}
                                                <td>{{ $kelompok->kelompok }}</td>
                                                <td>
                                                    <input type="number" min="1" max="100"
                                                        class="form-control" required
                                                        name="kelompoks[{{ $loop->index }}][persentase]"
                                                        value="{{ $kelompok->persentase ?? '' }}">
                                                </td>
                                                <td>
                                                    <input type="number" min="1" max="100"
                                                        class="form-control" required
                                                        name="kelompoks[{{ $loop->index }}][disc_1]"
                                                        value="{{ $kelompok->disc_1 ?? '' }}">
                                                </td>
                                                <td>
                                                    <input type="number" min="1" max="100"
                                                        class="form-control" required
                                                        name="kelompoks[{{ $loop->index }}][disc_2]"
                                                        value="{{ $kelompok->disc_2 ?? '' }}">
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center font-bold">Belum ada
                                                    kelompok
                                                    tersedia
                                                </td>
                                            </tr>
                                        @endforelse
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3">
                            <label for="file_upload" class="form-control">Gambar</label>
                            <input id="file_upload" type="file"
                                class="appearance-none mt-2 border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-300"
                                {{ $barang ? '' : 'required' }} name="gambar" accept="image/*">

                            <img id="previewImage"
                                src="{{ $barang ? url('storage/obat-barang/' . $barang->gambar) : '' }}"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary mt-5">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>