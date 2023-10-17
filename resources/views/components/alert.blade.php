@if (session('success'))
    <div class="alert alert-primary mt-5 show flex items-center mb-2" role="alert">
        <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> {{ session('success') }}
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
@if (session('error'))
    <div class="alert alert-danger mt-5 show flex items-center mb-2" role="alert">
        <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> {{ session('error') }}
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
