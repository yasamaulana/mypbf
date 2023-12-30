<div>
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Data Rencana Order
        </h2>
        <div data-tw-merge class="flex items-center">
            <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 font-bold sm:w-52">
                Cari Suplier
            </label>
            <select data-tw-merge aria-label="Default select example" class="w-full tom-select" wire:model.live="search">
                <option value="">- Pilih -</option>
                @forelse ($supliers as $sup)
                    <option>{{ $sup->nama_suplier }}</option>
                @empty
                @endforelse
            </select>
        </div>
    </div>

    <!-- BEGIN: Data List -->

    <!-- END: Data List -->
</div>
