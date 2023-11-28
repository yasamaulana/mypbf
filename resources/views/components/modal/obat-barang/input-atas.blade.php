<div class="grid grid-cols-12 gap-4">
    <div class="col-span-12 intro-y sm:col-span-6">
        <label for="input-wizard-3" class="form-label">Nama Produk</label>
        <div class="flex gap-3">
            <input id="input-wizard-3" type="text" class="form-control" placeholder="Nama Obat/barang"
                name="nama_obat_barang" required {{ app('request')->input('nama_obat_barang') ? 'readonly' : '' }}
                value="{{ $barang ? $barang->nama_obat_barang : app('request')->input('nama_obat_barang') }}">
            <a href="/cari-produk-e-report" class="w-40 btn btn-primary btn-sm">
                Cari Produk<br>E-Report
            </a>
        </div>
    </div>
    <div class="flex col-span-12 gap-3 intro-y sm:col-span-6">
        <div class="">
            <label for="input-wizard-3" class="form-label">E-Report</label>
            <input id="input-wizard-3" type="text" class="form-control" min="10000000000" max="99999999999"
                placeholder="Otomatis" required name="kode_obat_barang" type="text" class="form-control"
                name="kode_obat_barang" {{ app('request')->input('kode_obat_barang') ? 'readonly' : '' }}
                value="{{ $barang ? $barang->kode_obat_barang : (app('request')->input('kode_obat_barang') ? app('request')->input('kode_obat_barang') : rand(pow(10, 10), pow(10, 11) - 1)) }}">
        </div>
        <div class="">
            <label for="input-wizard-3" class="form-label">Kode Obat BPOM</label>
            <input id="input-wizard-3" type="text" class="form-control" placeholder="Kode Obat BPOM" required
                name="kode_obat_bpom" value="{{ $barang ? $barang->kode_obat_bpom : '' }}">
        </div>
    </div>
    <div class="col-span-12 intro-y sm:col-span-6">
        <label for="input-wizard-6" class="form-label">Satuan Dasar/Beli</label>
        <select id="satuan_dasar_beli{{ $id ?? 0 }}" class="form-select" required name="satuan_dasar_beli">
            @if ($satuans->isNotEmpty())
                <option value="">- Pilih -</option>
                @foreach ($satuans as $satuan)
                    <option {{ $barang ? ($barang->satuan_dasar_beli == $satuan->satuan ? 'selected' : '') : '' }}>
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
            <input id="input-wizard-3" type="text" class="form-control" placeholder="Barcode QR Produk" required
                name="barcode_qr_produk" value="{{ $barang ? $barang->barcode_qr_produk : '' }}">
        </div>
        <div class="">
            <label for="input-wizard-3" class="form-label">Barcode Produk</label>
            <input id="input-wizard-3" type="text" class="form-control" placeholder="Barcode QR Produk" required
                name="barcode_produk" value="{{ $barang ? $barang->barcode_produk : '' }}">
        </div>
    </div>
    <div class="col-span-12 intro-y sm:col-span-6">
        <label for="input-wizard-3" class="form-label">Isi</label>
        <input id="isiatas{{ $id ?? 0 }}" type="number" class="form-control" placeholder="" required
            name="isi" value="{{ $barang ? $barang->isi : '' }}">
    </div>
    <div class="col-span-12 intro-y sm:col-span-6">
        <label for="input-wizard-6" class="form-label">Satuan Jual Terkecil</label>
        <select id="input-satuan-terkecil{{ $id ?? 0 }}" class="form-select" required name="satuan_jual_terkecil">
            <option value="">- Pilih -</option>
            @if ($satuans->isNotEmpty())
                @foreach ($satuans as $satuan)
                    <option {{ $barang ? ($barang->satuan_jual_terkecil == $satuan->satuan ? 'selected' : '') : '' }}>
                        {{ $satuan->satuan }}</option>
                @endforeach
            @else
                <option value="">Belum ada data</option>
            @endif
        </select>
    </div>
    <div class="col-span-12 intro-y sm:col-span-6">
        <label for="input-wizard-3" class="form-label">Keterangan Satuan</label>
        <input id="input-wizard-3" type="text" class="form-control" placeholder="" required name="ket_satuan"
            value="{{ $barang ? $barang->ket_satuan : '' }}">
    </div>
    <div class="col-span-12 intro-y sm:col-span-6">
        <label for="input-wizard-3" class="form-label">Kemasan</label>
        <input id="input-wizard-3" type="text" class="form-control" placeholder="" required name="kemasan"
            value="{{ $barang ? $barang->kemasan : app('request')->input('kemasan') }}">
    </div>
    <div class="col-span-12 intro-y sm:col-span-6">
        <label for="input-wizard-6" class="form-label">Kelompok</label>
        <select id="input-wizard-6" class="form-select" required name="golongan">
            @if ($golongans->isNotEmpty())
                @foreach ($golongans as $gol)
                    <option {{ $barang ? ($barang->golongan == $gol->golongan ? 'selected' : '') : '' }}>
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
                    <option {{ $barang ? ($barang->sub_golongan == $gol->sub_golongan ? 'selected' : '') : '' }}>
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
                    <option {{ $barang ? ($barang->jenis_obat_barang == $satuan->jenis ? 'selected' : '') : '' }}>
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
                    <option {{ $barang ? ($barang->produsen == $prod->produsen ? 'selected' : '') : '' }}>
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
        <input id="input-wizard-3" type="number" class="form-control" placeholder="" required name="stok_minimal"
            value="{{ $barang ? $barang->stok_minimal : '' }}">
    </div>
    <div class="col-span-12 intro-y sm:col-span-6">
        <label for="input-wizard-3" class="form-label">Stok Maksimal</label>
        <input id="input-wizard-3" type="number" class="form-control" placeholder="" required name="stok_maksimal"
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
        <input id="input-wizard-3" type="text" class="form-control" placeholder="" required
            name="bentuk_kekuatan" value="{{ $barang ? $barang->bentuk_kekuatan : '' }}">
    </div>
</div>
<div class="flex gap-3 mt-3">
    <div class="col-span-12 intro-y sm:col-span-6">
        <label for="input-wizard-3" class="form-label">No. Ijin Edar</label>
        <input id="input-wizard-3" type="text" class="form-control" placeholder="" required name="no_ijin_edar"
            value="{{ $barang ? $barang->no_ijin_edar : '' }}">
    </div>
    <div class="mt-2">
        <label>Exp Date</label>
        <div class="mt-2">
            <div class="form-check form-switch">
                <input id="checkbox-switch-7" class="form-check-input" type="checkbox" name="exp_date"
                    {{ $barang ? ($barang->exp_date == '1' ? 'checked' : '') : '' }}>
            </div>
        </div>
    </div>
    <div class="mt-2">
        <label>Aktif</label>
        <div class="mt-2">
            <div class="form-check form-switch">
                <input id="checkbox-switch-7" class="form-check-input" type="checkbox" name="status"
                    {{ $barang ? ($barang->status == '1' ? 'checked' : '') : '' }}>
            </div>
        </div>
    </div>
</div>
