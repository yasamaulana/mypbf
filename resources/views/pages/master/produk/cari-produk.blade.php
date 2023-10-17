@extends('layout.main')

@section('main')
    <div class="text-lg font-medium text-center mt-8">
        <h3>Cari Produk E-Report</h3>
    </div>
    <form action="{{ route('cari.e-report') }}" method="get" class="w-full">
        <div class="flex gap-3 mt-5 justify-center">
            <input type="text" class="form-control w-1/2" name="cari" placeholder="Cari Produk E-Report">
            <button class="btn btn-primary">Cari</button>
        </div>
    </form>

    @if ($produks != null)
        <div class="box p-5 mt-5">
            <div class="overlow-auto">
                <table class="table">
                    <thead class="font-bold text-center">
                        <tr>
                            <td class="border border-slate-600">No</td>
                            <td class="border border-slate-600">Kode Obat</td>
                            <td class="border border-slate-600">Nama Obat</td>
                            <td class="border border-slate-600">Nama Industri</td>
                            <td class="border border-slate-600">Sediaan</td>
                            <td class="border border-slate-600">Kemasan</td>
                            <td class="border border-slate-600">Vol</td>
                            <td class="border border-slate-600">Satuan</td>
                            <td class="border border-slate-600">Status</td>
                            <td class="border border-slate-600">Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($produks as $prod)
                            <tr>
                                <td class="border border-slate-600">{{ $loop->iteration }}</td>
                                <td class="border border-slate-600">{{ $prod->kode_obat }}</td>
                                <td class="border border-slate-600">{{ $prod->nama_obat }}</td>
                                <td class="border border-slate-600">{{ $prod->nama_industri }}</td>
                                <td class="border border-slate-600">{{ $prod->sediaan }}</td>
                                <td class="border border-slate-600">{{ $prod->kemasan }}</td>
                                <td class="border border-slate-600">{{ $prod->vol }}</td>
                                <td class="border border-slate-600">{{ $prod->satuan }}</td>
                                <td class="border border-slate-600">{{ $prod->status }}</td>
                                <td class="border border-slate-600">
                                    <a
                                        href="{{ route('obat-barang', ['nama_obat_barang' => $prod->nama_obat, 'kode_obat_barang' => $prod->kode_obat, 'kemasan' => $prod->kemasan]) }}"><button
                                            class="btn btn-primary btn-sm">Pilih</button></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center font-bold" colspan="10">Tidak ada produk yang sesuai</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="flex justify-center mt-5">
                {{ $produks->links() }}
            </div>
        </div>
    @else
        <div class="box p-5 mt-5">
            <div class="overflow-auto">
                <table class="table">
                    <thead class="font-bold text-center">
                        <tr>
                            <td class="border border-slate-600">No</td>
                            <td class="border border-slate-600">Kode Obat</td>
                            <td class="border border-slate-600">Nama Obat</td>
                            <td class="border border-slate-600">Nama Industri</td>
                            <td class="border border-slate-600">Sediaan</td>
                            <td class="border border-slate-600">Kemasan</td>
                            <td class="border border-slate-600">Vol</td>
                            <td class="border border-slate-600">Satuan</td>
                            <td class="border border-slate-600">Status</td>
                            <td class="border border-slate-600">Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($allProduk as $prod)
                            <tr>
                                <td class="border border-slate-600">{{ $loop->iteration }}</td>
                                <td class="border border-slate-600">{{ $prod->kode_obat }}</td>
                                <td class="border border-slate-600">{{ $prod->nama_obat }}</td>
                                <td class="border border-slate-600">{{ $prod->nama_industri }}</td>
                                <td class="border border-slate-600">{{ $prod->sediaan }}</td>
                                <td class="border border-slate-600">{{ $prod->kemasan }}</td>
                                <td class="border border-slate-600">{{ $prod->vol }}</td>
                                <td class="border border-slate-600">{{ $prod->satuan }}</td>
                                <td class="border border-slate-600">{{ $prod->status }}</td>
                                <td class="border border-slate-600">
                                    <a
                                        href="{{ route('obat-barang', ['nama_obat_barang' => $prod->nama_obat, 'kode_obat_barang' => $prod->kode_obat, 'kemasan' => $prod->kemasan]) }}"><button
                                            class="btn btn-primary btn-sm">Pilih</button></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center font-bold" colspan="10">Tidak ada produk yang sesuai</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="flex justify-center mt-5">
                {{ $allProduk->links() }}
            </div>
        </div>
    @endif
@endsection
