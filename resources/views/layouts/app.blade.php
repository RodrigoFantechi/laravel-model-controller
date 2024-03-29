<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel @yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
@include('partials.header')
<!-- /#site_header -->
<main id="site_main">
@yield('content')
</main>
<!-- /#site_main -->
@include('partials.footer')
<!-- /#site_footer -->
</body>

</html>

