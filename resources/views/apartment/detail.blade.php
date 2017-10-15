@extends('layouts.app')<?php /** @var App\Model\EstateProject $project */?>
@section('css')
    @parent
    <link rel="stylesheet" href="/css/image-map-pro.min.css">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
                <h5 class="navbar-brand" onclick="window.location='{{ URL::route('home') }}'" role="button"><span><img src="/img/menu_icon.svg" style="width: 1rem; margin-right: 4px;"/> {{$project->ProjeAdi}}</span></h5>
                @include('sections.apartment_filter_bar')
            </nav>

            @include('sections.apartment_body')
        </div>
    </div>
@endsection

@section('javascript')
    @parent
    <script src="/js/polygon.js"></script>
    <script src="/js/image-map-pro.min.js"></script>
    <script>
        var objectJson = {!! $interactiveObject !!};
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

    </script>
@endsection