<main class="col-sm-9 ml-sm-auto col-md-10 p-0">
    <section id="sectionIcerik">
        <div class="btn-group btn-grp-fix" role="group">
            <button id="btnGenelVaziyet" type="button" class="btn btn-success active tableheader"
                    onclick="onClickActiveNav(this)">GENEL VAZİYET PLANI
            </button>
            <button id="btnParselVaziyet" type="button" class="btn btn-success tableheader"
                    onclick="onClickActiveNav(this)">NUMARATAJ
            </button>
            <button id="btnDaire" type="button" class="btn btn-success tableheader" onclick="onClickActiveNav(this)">
                DAİRE PLANI
            </button>
        </div>
        <div class="d-flex flex-row justify-content-between">
            <div></div>
            <canvas id="jPolygon" onmousedown="point_it(event)"
                    data-imgsrc="http://avrupark.com/images/kat-planlari/2+1-A-BLOK-2.jpg" width="960"
                    height="540"></canvas>
            <div id="image-map-pro-container"></div>
            <div class="d-flex flex-row justify-content-end">
                @include('sections.right_bar')
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

    <div id="plan-table" class="col-sm-9 ml-sm-auto col-md-10 p-0 m-0" role="tablist" aria-multiselectable="true">
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
                                <th>BRÜT METREKARE</th>
                                <th>SATIŞ FİYATI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($apartments as $apartment)
                                <tr>
                                    <td>
                                        <a href="{{URL::route('block.detail', $apartment->id)}}">{{$apartment->BlokNo}}</a>
                                    </td>
                                    <td>
                                        <a href="{{URL::route('apartment.detail', $apartment->id)}}">{{$apartment->KapiNo}}</a>
                                    </td>
                                    <td>{{$apartment->BulunduguKat}}</td>
                                    <td>{{$apartment->Yon}}</td>
                                    <td>{{$apartment->OdaSayisi}}</td>
                                    <td>{{$apartment->BrutM2}}</td>
                                    <td>{{$apartment->BrutM2}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
