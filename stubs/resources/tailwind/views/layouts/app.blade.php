<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $pageTitle ?? config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        @stack('fonts')

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @stack('styles')

        <!-- Scripts -->
        <!-- 
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
        -->

    </head>

    <body class="antialiased">
        @include('partials.header')

        @include('partials.navigation-menu')

        @yield('content')

        @include('partials.footer')

        @stack('footer-scripts')
    </body>
</html>