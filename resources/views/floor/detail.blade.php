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
                @include('sections.filter_bar')
            </nav>

            <main class="col-sm-9 ml-sm-auto col-md-10 p-0">
                <section id="sectionIcerik">
                    <div class="btn-group btn-grp-fix" role="group">
                        <button id="btnGenelVaziyet" type="button" class="btn btn-success active tableheader"
                                onclick="onClickActiveNav(this)">GENEL VAZİYET PLANI
                        </button>
                        <button id="btnParselVaziyet" type="button" class="btn btn-success tableheader"
                                onclick="onClickActiveNav(this)">PARSEL VAZİYET PLANI
                        </button>
                        <button id="btnDaire" type="button" class="btn btn-success tableheader"
                                onclick="onClickActiveNav(this)">DAİRE PLANI
                        </button>
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <div></div>
                        <canvas id="jPolygon" onmousedown="point_it(event)"
                                data-imgsrc="{{$floor->floorPhoto->getImageUrl()}}" width="960"
                                height="540"></canvas>
                        <div id="image-map-pro-container"></div>
                        <div class="d-flex flex-row justify-content-end">
                            @include('sections.right_bar')
                            <div id="rightIcerik" class="collapse">
                                <h5>{{$apartment->BlokNo}} - {{$apartment->KullanilisSekli}}}</h5>
                                <span>Ada:{{$apartment->Ada}}</span>
                                <span>Parsel:{{$apartment->Parsel}}</span>
                                <span>Blok No:{{$apartment->BlokNo}}</span>
                                <span>Kullanım Şekli:{{$apartment->KullanilisSekli}}</span>
                                <span>Oda Sayısı:{{$apartment->OdaSayisi}}</span>
                                <span>Yön:{{$apartment->Yon}}</span>
                                <span>Gayrimenkul Durumu:{{$apartment->GayrimenkulDurumu}}</span>
                                <hr>
                                <span>Net Alan:{{$apartment->NetM2}}</span>
                                <span>Açık Net Alan:{{$apartment->AcikNetM2}}</span>
                                <span>Brüt Alan:{{$apartment->BrutM2}}</span>
                                <hr>
                                <span>Bulunduğu Kat:{{$apartment->BulunduguKat}}</span>
                                <span>Kapı Numarası:{{$apartment->KapiNo}}</span>
                            </div>
                        </div>
                    </div>
                </section>

                <div id="plan-table" class="col-sm-9 ml-sm-auto col-md-10 p-0 m-0" role="tablist"
                     aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <img id="img-up" src="/img/down.png" class="up" role="button" onclick="upIconChange()"
                                 data-toggle="collapse" data-parent="#plan-table" data-target="#collapseOne"/>
                        </div>
                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-block">
                                <table class="table table-striped">
                                    <thead class="tableheader">
                                        <tr>
                                            <th>BLOK</th>
                                            <th>KAPI NO</th>
                                            <th>KAT</th>
                                            <th>YÖN</th>
                                            <th>ODA</th>
                                            <th>METREKARE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($project->EstateProjectApartment as $apartment)
                                            <tr>
                                                <td>{{$apartment->BlokNo }}</td>
                                                <td>{{$apartment->KapiNo }}</td>
                                                <td>{{$apartment->BulunduguKat }}</td>
                                                <td>{{$apartment->Yon }}</td>
                                                <td>{{$apartment->OdaSayisi }}</td>
                                                <td>{{$apartment->BrutM2 }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection

@section('javascript')
    @parent
    <script src="/js/polygon.js"></script>
    <script src="/js/image-map-pro.min.js"></script>
    <script>
        var objectJson = {!! $parcel->parcelInteractivity ? $parcel->parcelInteractivity->interactiveJson : json_encode(false) !!};
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