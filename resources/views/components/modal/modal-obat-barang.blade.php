@php
    use App\Models\DiskonKelompok;
@endphp
<div id="{{ $id_modal . $id }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="mr-auto text-base font-medium">
                    Data Produk
                </h2>
            </div>
            <form action="{{ route($route, ['id' => $id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="px-10 modal-body">
                    <div class="preview">
                        <div class="grid grid-cols-12 gap-4">
                            <div class="col-span-12 intro-y sm:col-span-6">
                                <label for="input-wizard-3" class="form-label">Nama Produk</label>
                                <div class="flex gap-3">
                                    <input id="input-wizard-3" type="text" class="form-control"
                                        placeholder="Nama Obat/barang" name="nama_obat_barang" required
                                        {{ app('request')->input('nama_obat_barang') ? 'readonly' : '' }}
                                        value="{{ $barang ? $barang->nama_obat_barang : app('request')->input('nama_obat_barang') }}">
                                    <a href="/cari-produk-e-report" class="w-40 btn btn-primary btn-sm">
                                        Cari Produk<br>E-Report
                                    </a>
                                </div>
                            </div>
                            <div class="flex col-span-12 gap-3 intro-y sm:col-span-6">
                                <div class="">
                                    <label for="input-wizard-3" class="form-label">E-Report</label>
                                    <input id="input-wizard-3" type="text" class="form-control" min="10000000000"
                                        max="99999999999" placeholder="Otomatis" required name="kode_obat_barang"
                                        type="text" class="form-control" name="kode_obat_barang"
                                        {{ app('request')->input('kode_obat_barang') ? 'readonly' : '' }}
                                        value="{{ $barang ? $barang->kode_obat_barang : (app('request')->input('kode_obat_barang') ? app('request')->input('kode_obat_barang') : rand(pow(10, 10), pow(10, 11) - 1)) }}">
                                </div>
                                <div class="">
                                    <label for="input-wizard-3" class="form-label">Kode Obat BPOM</label>
                                    <input id="input-wizard-3" type="text" class="form-control"
                                        placeholder="Kode Obat BPOM" required name="kode_obat_bpom"
                                        value="{{ $barang ? $barang->kode_obat_bpom : '' }}">
                                </div>
                            </div>
                            <div class="col-span-12 intro-y sm:col-span-6">
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
                            <div class="flex col-span-12 gap-3 intro-y sm:col-span-6">
                                <div class="">
                                    <label for="input-wizard-3" class="form-label">Barcode QR Produk</label>
                                    <input id="input-wizard-3" type="text" class="form-control"
                                        placeholder="Barcode QR Produk" required name="barcode_qr_produk"
                                        value="{{ $barang ? $barang->barcode_qr_produk : '' }}">
                                </div>
                                <div class="">
                                    <label for="input-wizard-3" class="form-label">Barcode Produk</label>
                                    <input id="input-wizard-3" type="text" class="form-control"
                                        placeholder="Barcode QR Produk" required name="barcode_produk"
                                        value="{{ $barang ? $barang->barcode_produk : '' }}">
                                </div>
                            </div>
                            <div class="col-span-12 intro-y sm:col-span-6">
                                <label for="input-wizard-3" class="form-label">Isi</label>
                                <input id="input-wizard-3" type="number" class="form-control" placeholder="" required
                                    name="isi" value="{{ $barang ? $barang->isi : '' }}">
                            </div>
                            <div class="col-span-12 intro-y sm:col-span-6">
                                <label for="input-wizard-6" class="form-label">Satuan Jual Terkecil</label>
                                <select id="input-satuan-terkecil{{ $id ?? 0 }}" class="form-select" required
                                    name="satuan_jual_terkecil">
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
                            <div class="col-span-12 intro-y sm:col-span-6">
                                <label for="input-wizard-3" class="form-label">Keterangan Satuan</label>
                                <input id="input-wizard-3" type="text" class="form-control" placeholder="" required
                                    name="ket_satuan" value="{{ $barang ? $barang->ket_satuan : '' }}">
                            </div>
                            <div class="col-span-12 intro-y sm:col-span-6">
                                <label for="input-wizard-3" class="form-label">Kemasan</label>
                                <input id="input-wizard-3" type="text" class="form-control" placeholder=""
                                    required name="kemasan"
                                    value="{{ $barang ? $barang->kemasan : app('request')->input('kemasan') }}">
                            </div>
                            <div class="col-span-12 intro-y sm:col-span-6">
                                <label for="input-wizard-6" class="form-label">Kelompok</label>
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
                            <div class="col-span-12 intro-y sm:col-span-6">
                                <label for="input-wizard-6" class="form-label">Golongan</label>
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
                            <div class="col-span-12 intro-y sm:col-span-6">
                                <label for="input-wizard-6" class="form-label">Jenis Produk </label>
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
                            <div class="col-span-12 intro-y sm:col-span-6">
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
                            <div class="col-span-12 intro-y sm:col-span-6">
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
                            <div class="col-span-12 intro-y sm:col-span-6">
                                <label for="input-wizard-3" class="form-label">Stok Minimal</label>
                                <input id="input-wizard-3" type="number" class="form-control" placeholder=""
                                    required name="stok_minimal" value="{{ $barang ? $barang->stok_minimal : '' }}">
                            </div>
                            <div class="col-span-12 intro-y sm:col-span-6">
                                <label for="input-wizard-3" class="form-label">Stok Maksimal</label>
                                <input id="input-wizard-3" type="number" class="form-control" placeholder=""
                                    required name="stok_maksimal"
                                    value="{{ $barang ? $barang->stok_maksimal : '' }}">
                            </div>
                            <div class="col-span-12 intro-y sm:col-span-6">
                                <label for="input-wizard-3" class="form-label">Komposisi</label>
                                <textarea id="input-wizard-3" type="text" class="form-control" placeholder="" required name="komposisi">{{ $barang ? $barang->komposisi : '' }}</textarea>
                            </div>
                            <div class="col-span-12 intro-y sm:col-span-6">
                                <label for="input-wizard-3" class="form-label">Zak Aktif</label>
                                <textarea id="input-wizard-3" type="text" class="form-control" placeholder="" required name="zat_aktif">{{ $barang ? $barang->zat_aktif : '' }}</textarea>
                            </div>
                            <div class="col-span-12 mt-2 intro-y sm:col-span-6">
                                <label for="input-wizard-3" class="form-label">Bentuk Dan Kekuatan</label>
                                <input id="input-wizard-3" type="text" class="form-control" placeholder=""
                                    required name="bentuk_kekuatan"
                                    value="{{ $barang ? $barang->bentuk_kekuatan : '' }}">
                            </div>
                        </div>
                        <div class="flex gap-3 mt-3">
                            <div class="col-span-12 intro-y sm:col-span-6">
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
                        @php
                            $key = 0;
                        @endphp
                        @forelse ($kelompoks as $item)
                            <div class="mt-3">
                                <label for="table-set" class="font-bold form-control">Setting Harga Jual
                                    {{ $loop->iteration }}</label>
                                <table class="table mt-3 border" id="table-set">
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
                                            @foreach (DiskonKelompok::where('id_obat_barang', $barang->id)->where('id_set_harga', $key + 1)->get() as $diskon)
                                                @if ($loop->first)
                                                    <div class="flex gap-3 mt-3">
                                                        <label for="input-wizard-6" class="mt-2 form-label">Satuan
                                                            Dasar/Beli</label>
                                                        <select id="input{{ $key }}"
                                                            class="w-40 form-select input{{ $key }}">
                                                            @if ($satuans->isNotEmpty())
                                                                <option value="">- Pilih -</option>
                                                                @foreach ($satuans as $satuan)
                                                                    <option value="{{ $satuan->satuan }}"
                                                                        {{ $barang ? ($diskon->satuan_dasar_beli == $satuan->satuan ? 'selected' : '') : '' }}>
                                                                        {{ $satuan->satuan }}
                                                                    </option>
                                                                @endforeach
                                                            @else
                                                                <option value="">Belum ada data</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                @endif
                                                <input type="hidden"
                                                    name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][satuan_dasar_beli]"
                                                    id="satuan{{ $key }}"
                                                    class="satuan{{ $key }}">
                                                <input type="hidden" class="form-control"
                                                    id="isi{{ $key }}"
                                                    name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][isi]">
                                                <script>
                                                    document.addEventListener('DOMContentLoaded', function() {
                                                        var inputElement = document.getElementById('input{{ $key }}');
                                                        var inputIsi = document.getElementById('inputIsi{{ $key }}');

                                                        inputElement.addEventListener('change', function() {
                                                            var selectedValue = this.value;
                                                            $('.satuan{{ $key }}').val(selectedValue);
                                                        });

                                                        inputIsi.addEventListener('input', function() {
                                                            var selectedValue = this.value;
                                                            $('#isi{{ $key }}').val(
                                                                selectedValue);
                                                        });

                                                    });
                                                </script>
                                                <tr>
                                                    {{-- hidden information --}}
                                                    <input type="hidden"
                                                        name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][id_kelompok]"
                                                        value="{{ $diskon->id_kelompok }}">
                                                    <input type="hidden"
                                                        name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][id_set_harga]"
                                                        value="{{ $item->id }}">
                                                    {{-- End hidden information --}}
                                                    <td>{{ $kelompoks->where('id', $diskon->id_kelompok)->first()->kelompok }}
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" required
                                                            name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][persentase]"
                                                            value="{{ $diskon->persentase }}">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" required
                                                            name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][disc_1]"
                                                            value="{{ $diskon->disc_1 }}">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" required
                                                            name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][disc_2]"
                                                            value="{{ $diskon->disc_2 }}">
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            @forelse ($kelompoks as $kelompok)
                                                @if ($loop->first)
                                                    <div class="flex gap-3 mt-3">
                                                        <div class="flex gap-3 ">
                                                            <label for="input-wizard-6" class="mt-2 form-label">Satuan
                                                                Dasar/Beli</label>
                                                            <select id="input{{ $key }}"
                                                                class="w-40 form-select input{{ $key }}">
                                                                @if ($satuans->isNotEmpty())
                                                                    <option value="">- Pilih -</option>
                                                                    @foreach ($satuans as $satuan)
                                                                        <option value="{{ $satuan->satuan }}"
                                                                            {{ $barang ? ($barang->satuan_dasar_beli == $satuan->satuan ? 'selected' : '') : '' }}>
                                                                            {{ $satuan->satuan }}
                                                                        </option>
                                                                    @endforeach
                                                                @else
                                                                    <option value="">Belum ada data</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="flex gap-3 ">
                                                            <label for="inputIsi{{ $key }}"
                                                                class="mt-2 form-label">Isi</label>
                                                            <input type="number" class="form-control"
                                                                id="inputIsi{{ $key }}">
                                                        </div>
                                                        <p class="mt-2 font-bold satuan-terkecil{{ $id ?? 0 }}">
                                                            Tablet
                                                        </p>
                                                    </div>
                                                @endif
                                                <input type="hidden"
                                                    name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][satuan_dasar_beli]"
                                                    id="satuan{{ $key }}"
                                                    class="satuan{{ $key }}">
                                                <input type="hidden" class="form-control"
                                                    id="isi{{ $key }}"
                                                    name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][isi]">
                                                <script>
                                                    document.addEventListener('DOMContentLoaded', function() {
                                                        var inputElement = document.getElementById('input{{ $key }}');
                                                        var inputIsi = document.getElementById('inputIsi{{ $key }}');

                                                        inputElement.addEventListener('change', function() {
                                                            var selectedValue = this.value;
                                                            $('.satuan{{ $key }}').val(selectedValue);
                                                        });

                                                        inputIsi.addEventListener('input', function() {
                                                            var selectedValue = this.value;
                                                            $('#isi{{ $key }}').val(
                                                                selectedValue);
                                                        });
                                                    });
                                                </script>
                                                <tr>
                                                    {{-- hidden information --}}
                                                    <input type="hidden"
                                                        name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][id_kelompok]"
                                                        value="{{ $kelompok->id }}">
                                                    <input type="hidden"
                                                        name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][id_set_harga]"
                                                        value="{{ $item->id }}">
                                                    {{-- End hiddenn information --}}
                                                    <td>{{ $kelompok->kelompok }}</td>
                                                    <td>
                                                        <input type="number" value="0" class="form-control"
                                                            name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][persentase]"
                                                            value="{{ $kelompok->persentase ?? '' }}">
                                                    </td>
                                                    <td>
                                                        <input type="number" value="0" class="form-control"
                                                            name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][disc_1]"
                                                            value="{{ $kelompok->disc_1 ?? '' }}">
                                                    </td>
                                                    <td>
                                                        <input type="number" value="0" class="form-control"
                                                            name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][disc_2]"
                                                            value="{{ $kelompok->disc_2 ?? '' }}">
                                                    </td>
                                                </tr>

                                            @empty
                                                <tr>
                                                    <td colspan="4" class="font-bold text-center">Belum ada
                                                        kelompok
                                                        tersedia
                                                    </td>
                                                </tr>
                                            @endforelse
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            @php
                                $key++;
                            @endphp
                        @empty
                            <h1 class="text-center">Belum ada data tersedia</h1>
                        @endforelse
                        <div class="mt-3">
                            <label for="file_upload" class="form-control">Gambar</label>
                            <input id="file_upload" type="file"
                                class="w-full px-3 py-2 mt-2 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300"
                                name="gambar" accept="image/*" onchange="loadFile(event, {{ $id ? $id : '0' }})">

                            <img class="previewImage{{ $id ? $id : '0' }}"
                                src="{{ $barang ? url('storage/obat-barang/' . $barang->gambar) : '' }}"
                                alt="">
                        </div>

                        <script>
                            var loadFile = function(event, id) {
                                var reader = new FileReader();
                                reader.onload = function() {
                                    $('.previewImage' + id).attr('src', reader.result);
                                };
                                reader.readAsDataURL(event.target.files[0]);
                            };
                        </script>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="mt-5 btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var inputSatuan = document.getElementById('input-satuan-terkecil{{ $id }}');

        inputSatuan.addEventListener('change', function() {
            var selectedValue = this.value;
            console.log(selectedValue);
            $('.satuan-terkecil{{ $id ?? 0 }}').innerHTML(selectedValue);
        });
    });
</script>
