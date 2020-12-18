<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $pageTitle ?? config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        @stack('fonts')

        <!-- Styles -->
        @stack('styles')

    </head>

    <body class="antialiased bg-gray-100">
        @include('partials.header')

        @include('partials.navigation-menu')

        @yield('content')

        @include('partials.footer')

        @stack('footer-scripts')
    </body>
</html>