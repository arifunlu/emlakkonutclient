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
                @include('project.parts.kullanilis_sekli')
                @include('project.parts.yon')
                @include('project.parts.bulundugu_kat')
                @include('project.parts.oda_sayisi')
                @include('project.parts.metraj')
                @include('project.parts.fiyat_araligi')
                @include('project.parts.ada')
                @include('project.parts.parsel')
                @include('project.parts.blok')
                @include('project.parts.kapi_no')
                @include('project.parts.sozlesme')
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
                                data-imgsrc="http://avrupark.com/images/kat-planlari/2+1-A-BLOK-2.jpg" width="960"
                                height="540"></canvas>
                        <div id="image-map-pro-container"></div>
                        <div class="d-flex flex-row justify-content-end">
                            <div class="d-flex flex-column align-items-center" style="z-index: 99;">
                                <img src="/img/pay.png" style="margin-top: 3rem;" role="button" data-toggle="collapse"
                                     data-target="#rightIcerik" onmouseover="this.src='/img/pay2.png';"
                                     onmouseout="this.src='/img/pay.png';"/>
                                <img src="/img/point.png" style="margin-top: 3rem;" onclick="toggleDraw(this);"
                                     role="button"/>
                                <img src="/img/clear.png" onclick="clear_canvas();" role="button"
                                     onmouseover="this.src='/img/clear2.png';" onmouseout="this.src='/img/clear.png';"/>
                                <img src="/img/zoom_in.png" onclick="updateZoom(0.2);" role="button"
                                     onmouseover="this.src='/img/zoom_in2.png';"
                                     onmouseout="this.src='/img/zoom_in.png';"/>
                                <img src="/img/zoom.png" onclick="updateZoom(0);" role="button"
                                     onmouseover="this.src='/img/zoom2.png';" onmouseout="this.src='/img/zoom.png';"/>
                                <img src="/img/zoom_out.png" onclick="updateZoom(-0.2);" role="button"
                                     onmouseover="this.src='/img/zoom_out2.png';"
                                     onmouseout="this.src='/img/zoom_out.png';"/>
                                <img src="/img/map.png" onclick="window.location='{{ URL::route('map') }}'"
                                     role="button" onmouseover="this.src='/img/map2.png';"
                                     onmouseout="this.src='/img/map.png';"/>
                            </div>
                            <div id="rightIcerik" class="collapse">
                                <h5>B TİP BLOK - 3+1 DAİRE</h5>
                                <span>Giriş Holü:</span>
                                <span>Koridor:</span>
                                <span>Salon:</span>
                                <span>Mutfak:</span>
                                <span>Banyo:</span>
                                <span>Ebeveyn Yatak Odası:</span>
                                <span>Oda 1:</span>
                                <span>Oda 2:</span>
                                <span>Ebeveyn Banyosu:</span>
                                <span>Kapalı Balkon:</span>
                                <hr>
                                <span>Net Alan:</span>
                                <span>Açık Balkon:</span>
                                <hr>
                                <span>Balkon Dahil Toplam Net Alan:</span>
                                <span>Satışa Esas Brüt Alan:</span>
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
                                                <td><a href="#">{{$apartment->BlokNo }}</a></td>
                                                <td><a href="#">{{$apartment->KapiNo }}</a></td>
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

    </script>
@endsection