<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $pageTitle ?? config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        @stack('fonts')

        <!-- Styles -->
        @stack('styles')

    </head>

    <body class="bg-light h-100 w-100">
        @include('trs::header')

        @yield('content')

        @include('trs::footer')

        @stack('footer-scripts')
    </body>
</html>