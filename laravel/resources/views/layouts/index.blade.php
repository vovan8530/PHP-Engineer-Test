<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

@include('layouts.header')

<div id="app" class="container py-2">
    @yield('content')
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
