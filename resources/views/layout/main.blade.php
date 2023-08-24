<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Rubick admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>MYPbf - {{ Str::title($title) }}</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="dist/css/app.css" />
    @vite('resources/css/app.css')
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="py-5">
    @include('layout.mobile')
    @include('layout.topbar')
    @include('layout.navbar')
    <!-- BEGIN: Content -->
    <div class="content">
        @yield('main')
    </div>
    @include('layout.darkmode')
    <!-- BEGIN: JS Assets-->
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script> --}}
    <script src="dist/js/app.js"></script>
    <!-- END: JS Assets-->
</body>

</html>
