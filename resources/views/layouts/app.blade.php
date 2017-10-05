<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        @section('css')
        <!-- Styles -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @show
    </head>
    <body>
        <nav class="navbar navbar-toggleable-md navbar-light fixed-top bg-custom">
            <img class="btn-back" src="/img/back.svg" onclick="window.location='{{ URL::route('home') }}'"
                 role="button"/>
            <a class="navbar-brand" href="#">
                <img src="/img/logo.png"/>
            </a>
            <i class="icon-Print btn-print" onclick="window.print();" role="button"></i>
        </nav>

    @yield('content')

    @section('javascript')
        <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}"></script>
            <script>
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            </script>
        @show
    </body>
</html>