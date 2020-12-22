<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('titolo')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    @include('partials.header')
    <body>
        @yield('contenuto')
    </body>
    @include('partials.footer')
</html>
