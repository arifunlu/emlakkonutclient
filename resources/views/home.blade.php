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
                background: url('img/bg.jpg') no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            .container {
                text-align: center;
            }
            .input-group-addon {
                background-color: transparent;
                border-color: #fff;
                border-radius: 1.5rem;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="input-group search-group">
                <input id="inputSearch" type="text" class="form-control search" placeholder="Ara..."  aria-describedby="basic-addon1" onkeyup="filter(this);" />
                <i class="icon-search input-group-addon"></i>
            </div>

            <div id="accordion">
                <div class="scroll-container">
                    <div class="panel" style="width: 50px;">
                    <div class="pink">
                        <div class="rotate">BATI ŞEHİR</div>
                    </div>
                    <div class="panelContent" onclick="window.location='{{ URL::route('detail') }}'">
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
            </div>
            
            <div class="arrow">
                <i class="icon-Backward btn-arrow" style="margin-right: 3rem;" role="button" onclick="scrollBack();"></i>
                <i class="icon-Forward btn-arrow" role="button" onclick="scrollNext();"></i>
            </div>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            function scrollBack() {
                var element = document.getElementById("accordion");
                element.scrollBy(-100, 0);
            }
            function scrollNext() {
                var element = document.getElementById("accordion");
                element.scrollBy(100, 0);
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

            function filter(p) {
                var input, filter, div, id = p.getAttribute("id");
                input = document.getElementById(id);
                filter = input.value.toLocaleUpperCase();

                div = document.getElementsByClassName("panel");

                for (var i in div) {
                    if (div[i].innerHTML) {
                        if (div[i].innerHTML.toLocaleUpperCase().indexOf(filter) > -1) {
                            div[i].style.display = "";
                        } else {
                            div[i].style.display = "none";
                        }
                    }
                }
            }
        </script>
    </body>
</html>