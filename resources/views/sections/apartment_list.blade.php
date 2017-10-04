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
                            @foreach($apartments as $apartment)
                                <tr>
                                    <td><a href="{{URL::route('block.detail', $apartment->id)}}">{{$apartment->BlokNo }}</a></td>
                                    <td><a href="{{URL::route('apartment.detail', $apartment->id)}}">{{$apartment->KapiNo }}</a></td>
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