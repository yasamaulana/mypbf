<div class="mt-3">
    <label for="file_upload" class="form-control">Gambar</label>
    <input id="file_upload" type="file"
        class="w-full px-3 py-2 mt-2 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300"
        name="gambar" accept="image/*" onchange="loadFile(event, {{ $id ? $id : '0' }})">

    <img class="previewImage{{ $id ? $id : '0' }}"
        src="{{ $barang ? url('storage/obat-barang/' . $barang->gambar) : '' }}" alt="">
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
