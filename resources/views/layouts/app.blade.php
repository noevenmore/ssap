<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','SSAP')</title>

    <link rel="icon" href="img/favicon.png">

    <link href="{{ asset('css/styles.min.css') }}" rel="stylesheet">
</head>
<body>
    @yield('content')
</body>
<script src="{{ asset('js/scripts.min.js') }}" defer></script>
</html>
