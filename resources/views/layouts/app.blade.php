<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <link rel="icon" type="image/png" href="/img/fav.png" />

        @section('css')
        <!-- Styles -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @show

        <style>
        .modal{
            z-index: 1070 !important;
        }
        .popover .arrow {
            display: none;
        }

        .DocsListItems{
            color: #fff !important;
            cursor: pointer;
            text-decoration: none !important;
            text-transform: capitalize;
        }
        </style>

        <style>
        .ShapeTextStyle {
            color: white;
            font-weight: bold;
            height: 100%;
            width: 100%;
            display: table;
        }

        .ShapeTextStyle span{
            display: table-cell;
            text-align: center;
            vertical-align: middle;
        }
        
        .imp-shape:hover .ShapeTextStyle {
            color:grey;
        }

        .StyleOtherApartment {
            margin-right: 10px !important;
            margin-left: 10px !important;
            margin-top: 0px !important;
            margin-bottom: 0px !important;
        }

        .HideRedApartment{
            display: none !important;
        }

        .ovalShapeTextStyle {
            color: white;
            font-weight: bold;
            height: 100%;
            width: 100%;
            display: table;
            font-size: small;
        }

        .ovalShapeTextStyle span{
            display: table-cell;
            text-align: center;
            vertical-align: middle;
        }
        .ovalShapeTextStyle span a{
            color: white;
        }

        .HideToolTipInRed{
            display:none;
        }
        </style>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-toggleable-md navbar-light fixed-top bg-custom">
                <img class="btn-back" src="/img/back.svg" onclick="window.history.back()" role="button"/>
                <a class="navbar-brand">
                    <img src="/img/logo.png"/>
                </a>
                <!--<img class="btn-print" src="/img/print.svg" onclick="window.print();" role="button"/>
                <p style="font-size: .88rem; position: absolute; top: 3.4rem; right: 1.75rem;">Yazdır</p>-->
            </nav>
            @yield('content')
        </div>

        @section('javascript')
        <!-- Scripts -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
            <script src="{{ asset('js/app.js') }}"></script>
            <script>
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                @if(isset($allVideosUrls))
                    $('#slideVideo').popover({
                        trigger: 'click',
                        html: true,
                        placement: 'top',
                        content: '<ul class="list-group-flush"> @foreach($allVideosUrls as $videoUrl)<li onclick="changeActiveVideo(\'video{{$videoUrl->id}}\')" class="list-group-item" data-toggle="modal" data-target="#slideModal" style="cursor: pointer;">{{$videoUrl->name}}</li>@endforeach </ul>'
                    });
                @endif
                
                @php( $docsFileArray = $project->getFolderFilesUrl('docs'))
                $('#slideDoc').popover({
                    html: true,
                    placement: 'top',
                    content: '<ul class="list-group-flush"> @foreach($docsFileArray as $doc) @php $ext = pathinfo($doc, PATHINFO_EXTENSION); $fileName = basename($doc, ".".$ext); @endphp <li class="list-group-item"><a href="{{ asset( $doc ) }}" target="_blank" class="DocsListItems"> {{$fileName}} </a></li> @endforeach </ul>'
                });

                // $('#slideFoto').popover({
                //     html: true,
                //     placement: 'top',
                //     content: '<ul class="list-group-flush"><li class="list-group-item" data-toggle="modal" data-target="#slidePhoto">Cras justo odio</li><li class="list-group-item">Dapibus ac facilisis in</li><li class="list-group-item">Morbi leo risus</li><li class="list-group-item">Porta ac consectetur ac</li><li class="list-group-item">Vestibulum at eros</li></ul>'
                // });
            </script>
        @show
    </body>
</html>