<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('titolo')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body>
        @include('partials.header')
        <main>
            @yield('contenuto')
        </main>
        @include('partials.footer')
    </body>
</html>
