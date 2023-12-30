<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link href="{{ asset('dist/pbflogo.png') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My PBf, sistem akutansi dan management PBF">
    <meta name="keywords" content="My PBF, member pbf, akutansi pbf, aplikasi pbf, web app">
    <meta name="author" content="Yasa Maulana">

    <title>MYPbf - {{ Str::title($title) }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ url('https://code.jquery.com/jquery-3.6.4.min.js') }}"></script>
</head>

<body>
    {{-- {{ $slot }} --}}
    @include('layout.mobile')
    @include('layout.topbar')
    @include('layout.navbar')
    <!-- BEGIN: Content -->
    <div class="content">
        @yield('main')
    </div>
    <script
        src="{{ url('https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js') }}">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script>
    <script src="{{ asset('dist/js/app.js') }}"></script>
</body>

</html>
