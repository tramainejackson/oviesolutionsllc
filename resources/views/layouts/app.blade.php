<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Ovie Solutions LLC'))</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bakbak+One&family=Moon+Dance&family=Raleway&family=Roboto+Flex:opsz,wght@8..144,100;8..144,400;8..144,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @yield('additional_css')

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_styles.css') }}">

</head>
<body class="">
<div class="min-vh-100">
    @include('layouts.navigation')

    <!-- Page Heading -->
    <header class="">
        {{ $header }}
    </header>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>

@include('layouts.footer')

<!-- Bootstrap core -->
<script type="text/javascript" src="{{ asset('js/scripts.min.js') }}"></script>

<!-- SCRIPTS -->
@yield('additional_scripts')

</body>
</html>
