@extends('layouts.app')<?php /** @var App\Model\EstateProject $project */?>
@section('css')
    @parent
    <link rel="stylesheet" href="/css/image-map-pro.min.css">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
                <h5 class="navbar-brand">{{$project->ProjeAdi}}</h5>
                @include('sections.filter_bar')
            </nav>

            @include('sections.apartment_list')
        </div>
    </div>
@endsection

@section('javascript')
    @parent
    <script src="/js/polygon.js"></script>
    <script src="/js/image-map-pro.min.js"></script>
    <script>
        var objectJson = {!! $project->EstateProjectInteractivity ? $project->EstateProjectInteractivity->interactiveJson     : json_encode(false) !!};
        ;(function ($, window, document, undefined) {
            $(document).ready(function () {
                $('#image-map-pro-container').imageMapPro(objectJson);

                $("#image-map-pro-container").panzoom();
                $("#jPolygon").panzoom();
                clear_canvas();
            });
        })(jQuery, window, document);

        function onClickActiveNav(p) {
            var id = p.getAttribute('id');
            $('.btn-grp-fix button.active').removeClass('active');
            $('#' + id).addClass('active');

            if (id === "btnDaire") {
                $("#image-map-pro-container").css({visibility: 'hidden'});
                $("#jPolygon").css({visibility: 'visible'});
            } else {
                $("#image-map-pro-container").css({visibility: 'visible'});
                $("#jPolygon").css({visibility: 'hidden'});
            }
        }

        var zoomLevel = 1,
            zoomFactor = 100;

        function updateZoom(zoom) {
            if (zoom === 0) {
                zoomLevel = 1;
            } else if (zoomLevel < 1.9999999999999999) {
                if ((zoomLevel !== 1.9999999999999998 || (zoomLevel === 1.9999999999999998 && zoom === -0.2)) &&
                    (zoomLevel !== 0.4000000000000001 || (zoomLevel === 0.4000000000000001 && zoom === 0.2))) {
                    zoomLevel += zoom;
                }
            }

            switch (Math.round(zoomLevel * 100) / 100) {
                case 0.4:
                    zoomFactor = 250;
                    break;
                case 0.6:
                    zoomFactor = 170;
                    break;
                case 0.8:
                    zoomFactor = 125;
                    break;
                case 1.2:
                    zoomFactor = 85;
                    break;
                case 1.4:
                    zoomFactor = 72;
                    break;
                case 1.6:
                    zoomFactor = 63;
                    break;
                case 1.8:
                    zoomFactor = 56;
                    break;
                case 2:
                    zoomFactor = 50;
                    break;
                default:
                    zoomFactor = 100;
            }

            $('#image-map-pro-container').css({
                transform: 'scale(' + zoomLevel + ')',
                '-moz-transform': 'scale(' + zoomLevel + ')'
            });
            $('#jPolygon').css({transform: 'scale(' + zoomLevel + ')', '-moz-transform': 'scale(' + zoomLevel + ')'});
        }

        function upIconChange() {
            if ($("#img-up").attr("src").indexOf("up") > -1) {
                $("#img-up").attr("src", "/img/down.png");
            } else {
                $("#img-up").attr("src", "/img/up.png");
            }
        }

        var toggle = true;

        function toggleDraw(p) {
            $("#jPolygon").panzoom("destroy");

            if (toggle) {
                $("#jPolygon").panzoom({panOnlyWhenZoomed: true, minScale: 1});
                p.src = "/img/point2.png";
                toggle = false;
                displayMode = false;
            } else {
                $("#jPolygon").panzoom();
                p.src = "/img/point.png";
                toggle = true;
                displayMode = true;
            }
        }

        var data = {};

        function onChangeFilters(e) {
            if (e.checked) {
                var param = e.id;

                if (param.indexOf("ada") > -1) {
                    data.ada = e.value;
                } else if (param.indexOf("parsel") > -1) {
                    data.parsel = e.value;
                } else if (param.indexOf("kullanis") > -1) {
                    data.kullanis = e.value;
                } else if (param.indexOf("yon") > -1) {
                    data.yon = e.value;
                } else if (param.indexOf("kat") > -1) {
                    data.kat = e.value;
                } else if (param.indexOf("oda") > -1) {
                    data.oda = e.value;
                } else if (param.indexOf("blok") > -1) {
                    data.blok = e.value;
                }

                $.post("/search", {
                    data: JSON.stringify(data),
                    success: function(data) {

                    }
                });
            }
        }

        function onClickTextFilters(s) {
            if (s === "fiyat") {
                data.priceMin = document.getElementById("priceMin").value;
                data.priceMax = document.getElementById("priceMax").value;
            } else if (s === "kapi") {
                data.kapiNo = document.getElementById("kapiNo").value;
            } else if (s === "metraj") {
                data.netM2Min = document.getElementById("netM2Min").value;
                data.netM2Max = document.getElementById("netM2Max").value;
            } else if (s === "sozlesme") {
                data.sozlesme = document.getElementById("sozlesme").value;
            }

            $.post("/search", {
                data: JSON.stringify(data),
                success: function(data) {

                }
            });
        }

    </script>
@endsection