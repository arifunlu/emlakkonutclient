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
            <link rel="icon" type="image/png" href="/img/fav.png" />
        @show
    </head>
    <body oncontextmenu="return false;">
        <nav class="navbar navbar-toggleable-md navbar-light fixed-top bg-custom">
            <img class="btn-back" src="/img/back.svg" onclick="window.location='{{ URL::route('home') }}'"
                 role="button"/>
            <a class="navbar-brand" href="#">
                <img src="/img/logo.png"/>
            </a>
            <i class="icon-Print btn-print" onclick="window.print();" role="button"></i>
            <p style="font-size: .88rem; position: absolute; top: 3.4rem; right: 1.75rem;">Yazdır</p>
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