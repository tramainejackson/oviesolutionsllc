<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ovie Solutions LLC') }}</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Styles -->
{{--    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
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

<!-- SCRIPTS -->
<!-- JQuery -->
{{--<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>--}}
<!-- Bootstrap tooltips -->
{{--<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>--}}
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
{{--<script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('js/myjs.js') }}" defer></script>--}}
</body>
</html>
