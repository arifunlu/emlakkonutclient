<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            body {
                padding-top: 150px;
                background: url('img/bg.png') no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            .container {
                text-align: center;
            }
            .search-group {
                width: 12rem;
                height: 3rem;
                margin: 0 auto;
                margin-bottom: 4rem;
            }
            .search {
                border-color: #fff;
                border-radius: 1.5rem;
                background-color: transparent;
                border-right: 0;
            }
            .search:focus {
                border-color: #fff;
                background-color: transparent;
            }
            .card-space {
                border-bottom: 0;
                border-radius: 0;
                margin-bottom: .5rem;
            }
            .arrow {
                width: 6rem;
                margin: 4rem auto;
            }
            .btn-arrow {
                font-size: 2rem;
            }
            .input-group-addon {
                background-color: transparent;
                border-color: #fff;
                border-radius: 1.5rem;
            }
            #accordion {
                max-height:350px;
                overflow-y:hidden;
            }
            .panel {
                float:left;
                display:block;
                height:350px;
                width:50px;
                overflow:hidden;
                margin-right: 10px;
                font-size: 1.2rem;
                white-space: nowrap;
            }
            .panelContent {
                padding: 0 0 0 50px;
                height:350px;
                width:350px;
            }
            .pink {
                width:50px;
                height:350px;
                float:left;
                background-color: #EFEDED;
                cursor:pointer;
            }
            .rotate {
                color: #0059ab;
                font-weight: bold;
                transform: translateY(975%) rotate(-90deg);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="input-group search-group">
                <input type="text" class="form-control search" placeholder="Ara..."  aria-describedby="basic-addon1" />
                <i class="icon-search input-group-addon"></i>
            </div>

            <div id="accordion">
                <div class="panel" style="width: 50px;">
                <div class="pink">
                    <div class="rotate">BATI ŞEHİR</div>
                </div>
                <div class="panelContent">
                    <img src="img/9.png" />
                </div>
                </div>
                <div class="panel" style="width: 50px;">
                <div class="pink">
                    <div class="rotate">VARYAP MERIDIAN</div>
                </div>
                <div class="panelContent">
                    <img src="img/9.png" />
                </div>
                </div>
                <div class="panel" style="width: 50px;">
                <div class="pink">
                    <div class="rotate">MY WORLD ATAŞEHİR</div>
                </div>
                <div class="panelContent">
                    <img src="img/9.png" />
                </div>
                </div>
                <div class="panel" style="width: 50px;">
                <div class="pink">
                    <div class="rotate">MY WORLD EUROPE</div>
                </div>
                <div class="panelContent">
                    <img src="img/9.png" />
                </div>
                </div>
                <div class="panel" style="width: 50px;">
                <div class="pink">
                    <div class="rotate">1STANBUL</div>
                </div>
                <div class="panelContent">
                    <img src="img/9.png" />
                </div>
                </div>
                <div class="panel" style="width: 50px;">
                <div class="pink">
                    <div class="rotate">UNIKONUT ISPARTAKULE</div>
                </div>
                <div class="panelContent">
                    <img src="img/9.png" />
                </div>
                </div>
                <div class="panel" style="width: 50px;">
                <div class="pink">
                    <div class="rotate">AVRUPA KONUTLARI - TEM</div>
                </div>
                <div class="panelContent">
                    <img src="img/9.png" />
                </div>
                </div>
                <div class="panel" style="width: 50px;">
                <div class="pink">
                    <div class="rotate">AVRUPA KONUTLARI - TEM 2</div>
                </div>
                <div class="panelContent">
                    <img src="img/9.png" />
                </div>
                </div>
                <div class="panel" style="width: 50px;">
                <div class="pink">
                    <div class="rotate">BAHÇETEPE İSTANBUL</div>
                </div>
                <div class="panelContent">
                    <img src="img/9.png" />
                </div>
                </div>
                <div class="panel" style="width: 50px;">
                <div class="pink">
                    <div class="rotate">MY TOWN ISPARTAKULE</div>
                </div>
                <div class="panelContent">
                    <img src="img/9.png" />
                </div>
                </div>
                <div class="panel" style="width: 50px;">
                <div class="pink">
                    <div class="rotate">BULVAR 216</div>
                </div>
                <div class="panelContent">
                    <img src="img/9.png" />
                </div>
                </div>
                <div class="panel" style="width: 50px;">
                <div class="pink">
                    <div class="rotate">BULGAZKENT</div>
                </div>
                <div class="panelContent">
                    <img src="img/9.png" />
                </div>
                </div>
                <div class="panel" style="width: 50px;">
                <div class="pink">
                    <div class="rotate">ŞEHRİZAR KONAKLARI</div>
                </div>
                <div class="panelContent">
                    <img src="img/9.png" />
                </div>
                </div>
                <div class="panel" style="width: 50px;">
                <div class="pink">
                    <div class="rotate">Test Action</div>
                </div>
                <div class="panelContent">
                    <img src="img/9.png" />
                </div>
                </div>
                <div class="panel" style="width: 50px;">
                <div class="pink">
                    <div class="rotate">Test Action</div>
                </div>
                <div class="panelContent">
                    <img src="img/9.png" />
                </div>
                </div>
                <div class="panel" style="width: 50px;">
                <div class="pink">
                    <div class="rotate">Test Action</div>
                </div>
                <div class="panelContent">
                    <img src="img/9.png" />
                </div>
                </div>
                <div class="panel" style="width: 50px;">
                <div class="pink">
                    <div class="rotate">Test Action</div>
                </div>
                <div class="panelContent">
                    <img src="img/9.png" />
                </div>
                </div>
                <div class="panel" style="width: 50px;">
                <div class="pink">
                    <div class="rotate">Test Action</div>
                </div>
                <div class="panelContent">
                    <img src="img/9.png" />
                </div>
                </div>
                <div class="panel" style="width: 50px;">
                <div class="pink">
                    <div class="rotate">Test Action</div>
                </div>
                <div class="panelContent">
                    <img src="img/9.png" />
                </div>
                </div>
                <div class="panel" style="width: 50px;">
                <div class="pink">
                    <div class="rotate">Test Action</div>
                </div>
                <div class="panelContent">
                    <img src="img/9.png" />
                </div>
                </div>
                <div class="panel" style="width: 50px;">
                <div class="pink">
                    <div class="rotate">Test Action</div>
                </div>
                <div class="panelContent">
                    <img src="img/9.png" />
                </div>
                </div>
            </div>
            
            <div class="arrow">
                <i class="icon-Backward btn-arrow" style="margin-right: 3rem;" role="button"></i>
                <i class="icon-Forward btn-arrow" role="button"></i>
            </div>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            function scrollNext() {
                var elmnt = document.getElementById("content");
                elmnt.scrollIntoView();
            }

            $(document).ready(function(){
                activePanel = $("#accordion div.panel:first");
            
                $("#accordion").delegate('.panel', 'click', function(e){
                    if( ! $(this).is('.active') ){
                        $(activePanel).animate({width: "50px"}, 300);
                        $(this).animate({width: "350px"}, 300);
                        $('#accordion .panel').removeClass('active');
                        $(this).addClass('active');
                        activePanel = this;
                    };
                });
            });
        </script>
    </body>
</html>