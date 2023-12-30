<form wire:submit.prevent="simpanNomorSurat">
    <div class="flex justify-center text-lg font-bold text-white modal-header bg-primary align-center">
        Setting No. SP
    </div>
    <div class="p-5 modal-body">
        @if (session()->has('success'))
            <div class="flex items-center mb-2 alert alert-primary show" role="alert">
                {{ session('success') }}
                <button id="closeAlert" class="ml-auto" onclick="closeAlert()">
                    <i data-feather="x-circle" class="w-4 h-4"></i>
                </button>
            </div>
            <script>
                function closeAlert() {
                    var alert = document.querySelector('.alert');
                    alert.style.display = 'none';
                }
            </script>
        @endif
        <div class="flex gap-5 align-middle">
            <p class="mt-2">000001</p>
            <input type="text" class="w-48 form-control" required wire:model="nomor1" value="{{ $nomor1 }}">
            <p class="mt-2">-</p>
            <p class="mt-2">REG/{{ \Carbon\Carbon::now()->format('m-y') }}</p>
        </div>
        <div class="flex gap-5 mt-3 align-middle">
            <p class="mt-2">000001</p>
            <input type="text" class="w-48 form-control" required wire:model="nomor2" value="{{ $nomor3 }}">
            <p class="mt-2">-</p>
            <p class="mt-2">OOT/{{ \Carbon\Carbon::now()->format('m-y') }}</p>
        </div>
        <div class="flex gap-5 mt-3 align-middle">
            <p class="mt-2">000001</p>
            <input type="text" class="w-48 form-control" required wire:model="nomor3" value="{{ $nomor3 }}">
            <p class="mt-2">-</p>
            <p class="mt-2">Prek/{{ \Carbon\Carbon::now()->format('m-y') }}</p>
        </div>
        <div class="flex gap-5 mt-3 align-middle">
            <p class="mt-2">000001</p>
            <input type="text" class="w-48 form-control" required wire:model="nomor4" value="{{ $nomor4 }}">
            <p class="mt-2">-</p>
            <p class="mt-2">Psiko/{{ \Carbon\Carbon::now()->format('m-y') }}</p>
        </div>
        <div class="flex gap-5 mt-3 align-middle">
            <p class="mt-2">000001</p>
            <input type="text" class="w-48 form-control" required wire:model="nomor5" value="{{ $nomor5 }}">
            <p class="mt-2">-</p>
            <p class="mt-2">Narko/{{ \Carbon\Carbon::now()->format('m-y') }}</p>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-secondary" data-tw-dismiss="modal">Cancel</button>
        <button class="btn btn-primary" wire:loading.remove type="submit">Simpan</button>
        <button wire:loading class="btn btn-primary">
            Menyimpan...
        </button>
    </div>
</form>
