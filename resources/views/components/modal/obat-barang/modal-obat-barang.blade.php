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
                        @include('components.modal.obat-barang.input-atas')
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
                                            @include('components.modal.obat-barang.data-barang')
                                        @else
                                            @include('components.modal.obat-barang.data-kelompok')
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
                        @include('components.modal.obat-barang.input-gambar')
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
    $(document).ready(function() {
        $('#input-satuan-terkecil{{ $id }}').on('change', function() {
            var selectedValue = $(this).val();
            $('.satuan-terkecil{{ $id ?? 0 }}').each(function() {
                $(this).html(selectedValue);
            });
        });
    });

    //setting input
    $(document).ready(function() {
        $('#satuan_dasar_beli{{ $id ?? 0 }}').on('change', function() {
            var selectedValue = $(this).val();
            $('#inputpertama{{ $id ?? 0 }}').val(selectedValue);
            $('#satuanpertama{{ $id ?? 0 }}').val(selectedValue);
        });

        $('#isiatas{{ $id ?? 0 }}').on('input', function() {
            var selectedValue = $(this).val();
            $('#isipertama{{ $id ?? 0 }}').val(selectedValue);
            $('#isihiddenpertama{{ $id ?? 0 }}').val(selectedValue);
        });
    });

    $(document).ready(function() {
        $('input[name^="kelompoks"]').on('input', function() {
            var sanitized = $(this).val().replace(/[^0-9,.]/g,
                '');
            $(this).val(sanitized);
        });
    });
</script>
