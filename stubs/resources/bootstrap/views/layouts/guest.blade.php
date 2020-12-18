<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
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
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>

    </head>

    <body class="bg-light h-100 w-100">
        @include('trs::header')

        @yield('content')

        @include('trs::footer')

        @stack('footer-scripts')
    </body>
</html>