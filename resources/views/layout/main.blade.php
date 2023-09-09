<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="dist/logo.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Rubick admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>MYPbf - {{ Str::title($title) }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="">
    @include('layout.mobile')
    @include('layout.topbar')
    @include('layout.navbar')
    <!-- BEGIN: Content -->
    <div class="content">
        @yield('main')
    </div>
    {{-- @include('layout.darkmode') --}}
    <!-- BEGIN: JS Assets-->
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script>
    <script src="dist/js/app.js"></script>
    <!-- END: JS Assets-->
</body>

</html>
