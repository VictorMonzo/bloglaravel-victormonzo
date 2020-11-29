<!DOCTYPE html>
<html>
<head>
    <title>@yield('titulo')</title>
    <!-- Bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.nav')
    @yield('contenido')
</body>
</html>
