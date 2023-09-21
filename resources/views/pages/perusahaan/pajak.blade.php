@php
    use App\Models\Pajak;
@endphp

@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Pajak Perusahaan
        </h2>
    </div>
    @if (session('success'))
        @include('components.alert')
    @endif
    <form action="{{ route('update.pajak') }}" method="POST">
        @csrf
        <div class="sm:flex gap-5">
            <div class="intro-y w-full box mt-5">
                <div
                    class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        PPN
                    </h2>
                </div>
                <div id="vertical-form" class="p-5">
                    <div class="preview">
                        <label for="vertical-form-1" class="form-label">PPN</label>
                        <div class="flex gap-2">
                            <input value="{{ $ppn != null ? $ppn->ppn : '' }}" id="vertical-form-1" name="ppn"
                                type="text" class="form-control" placeholder="%">
                            <p class="mt-2">%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y w-full box mt-5">
                <div
                    class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Nomor Faktur Seri Pajak
                    </h2>
                </div>
                <div id="inline-form" class="p-5">
                    <div class="preview">
                        <label class="form-label">Nomor Seri Pajak</label>
                        <div class="flex">
                            <input name="no_seri_pajak" type="text" class="form-control" style="width: 90%;"
                                id="formattedInput" placeholder="000.14.12345678">
                            <p class="mx-3 mt-2">s/d</p>
                            <input name="kali" id="horizontal-form-2" type="text" class="form-control"
                                style="width: 10%;" required placeholder="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary mt-5"> <i data-feather="download" class="w-4 h-4 mr-2"></i>
            Simpan Perubahan </button>
    </form>
    <div class="intro-y col-span-12 overflow-auto mt-5 lg:overflow-visible">
        <table class="table table-report -mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">Nomor</th>
                    <th class="whitespace-nowrap">Nomor Seri Pajak</th>
                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @if (!Pajak::where('id_perusahaan', Auth::user()->id_perusahaan)->get()->isNotEmpty())
                    <tr class="intro-x">
                        <td colspan="3" class="text-center font-bold">Data belum tersedia</td>
                    </tr>
                @endif
                @foreach (Pajak::where('id_perusahaan', Auth::user()->id_perusahaan)->get() as $pajak)
                    <tr class="intro-x">
                        <td class="w-40">{{ $loop->iteration }}</td>
                        <td class="">{{ $pajak->pajak }}</td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                {{-- <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square"
                                        class="w-4 h-4 mr-1"></i> Edit </a> --}}
                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                    data-tw-target="#delete-confirmation-modal{{ $pajak->id }}"> <i
                                        data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                <!-- BEGIN: Delete Confirmation Modal -->
                                @include('components.modal-delete', [
                                    'id_modal' => 'delete-confirmation-modal',
                                    'id' => $pajak->id,
                                    'route' => 'delete.pajak',
                                ])
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        const inputElement = document.getElementById('formattedInput');

        function formatNumber() {
            let value = inputElement.value.replace(/\D/g, '');
            if (value.length > 13) {
                value = value.slice(0, 13);
            }

            value = value.replace(/^(\d{3})(\d{2})/, "$1.$2.");

            inputElement.value = value;
        }
        inputElement.addEventListener('input', formatNumber);
    </script>
@endsection
