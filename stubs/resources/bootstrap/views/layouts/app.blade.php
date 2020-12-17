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

    <body class="antialiased">
        @include('trs::header')

        @include('trs::navigation-menu')

        @yield('content')

        @include('trs::footer')

        @stack('footer-scripts')
    </body>
</html>