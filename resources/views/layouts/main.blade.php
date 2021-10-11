<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>

    {{-- Cdns --}}
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    @yield('cdns')
</head>
<body>
    {{-- Header --}}
    @include('includes.header')
    
    {{-- Contents --}}
    @yield('content')

    {{-- Script --}}
    @yield('script')
</body>
</html>