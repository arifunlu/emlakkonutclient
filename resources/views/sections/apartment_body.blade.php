<main class="col-sm-9 ml-sm-auto col-md-10 p-0">
    <section id="sectionIcerik">
        <div class="btn-group btn-grp-fix" role="group" style="position: fixed; z-index: 999; left: 30.3%;">
            <button id="btnGenelVaziyet" type="button" class="btn btn-success tableheader" onclick="window.location='{{URL::route('project.detail', $project->id)}}'">
                G. VAZİYET PLANI
            </button>
            <!--<button id="btnBlockVaziyet" type="button" class="btn btn-success tableheader" onclick="window.location='{{URL::route('block360.detail', $apartment->id)}}'">
                BLOK
            </button>-->
            <button id="btnParselVaziyet" type="button" class="btn btn-success tableheader" onclick="window.location='{{URL::route('block.detail', $apartment->id)}}'">
                NUMARATAJ
            </button>
            <button id="btnDaire" type="button" class="btn btn-success tableheader active">
                DAİRE/KAT PLANI
            </button>
        </div>
        <div class="btn-group" role="group" style="position: fixed; z-index: 999; left: 52.9%;">
            <button id="btnDaire" type="button" class="btn btn-primary" style="background-color: #013370; border-top-left-radius: 0; border-top-right-radius: 0;">
                SANAL MAKET
            </button>
        </div>
        <div class="btn-group" role="group" style="position: fixed; z-index: 999; left: 60.5%;">
            <button id="btnDaire" type="button" class="btn btn-danger" style="background-color: #D50D17; border-top-left-radius: 0; border-top-right-radius: 0;" data-toggle="collapse" data-target="#medyaIcerik">
                MEDYA
            </button>
        </div>
        @if(isset($floor) && isset($apartment))
            <div class="d-flex flex-row justify-content-between">
                <div style="display: inherit; position: absolute; left: 60%; top: 3px; z-index: 999;">
                    <div id="medyaIcerik" class="collapse">
                        <div class="d-flex justify-content-end">
                                <div id="slideVideo" role="button" style="margin-right: 1rem;"><img src="/img/video.svg" style="width: 2rem;"/></div>
                                <div id="slideDoc" role="button" style="margin-right: 1rem;"><img src="/img/document.svg" style="width: 2rem;"/></div>
                                <div id="slideFoto" role="button" style="margin-right: 1rem;"><img src="/img/photo_gallery.svg" style="width: 2rem;"/></div>
                        </div>
                    </div>
                </div>
                <div></div>
                <canvas id="jPolygon" onmousedown="point_it(event)" data-imgsrc="{{$floor->floorPhoto ? $floor->floorPhoto->getImageUrl() : 'http://avrupark.com/images/kat-planlari/2+1-A-BLOK-2.jpg'}}"
                        width="960" height="540" oncontextmenu="return false"></canvas>
                <div style="height: 91vh; padding-top: 12rem; z-index: 99;">
                    <div style="z-index: 99; width: 2rem; margin-right: .1rem;">
                        <img src="/img/pay.png" style="margin-top: 3rem; display: none;" role="button" data-toggle="collapse"
                            data-target="#rightIcerik" onmouseover="this.style.opacity=.6;" onmouseout="this.style.opacity=1;"/>
                        <img src="/img/draw.svg" onclick="toggleDraw(this);"
                            role="button"/>
                        <img src="/img/clear.svg" onclick="clear_canvas();" role="button"
                            onmouseover="this.style.opacity=.6;" onmouseout="this.style.opacity=1;" style="margin-top: 1rem;"/>
                    </div>
                    @include('sections.right_bar')
                    <div id="rightIcerik" class="collapse">
                        <h5>{{$apartment->BlokNo}} Blok- {{$apartment->OdaSayisi}}</h5>
                        <span>Ada: {{$apartment->Ada}}</span>
                        <span>Numarataj: {{$apartment->Parsel}}</span>
                        <span>Blok No: {{$apartment->BlokNo}}</span>
                        <span>Kapı No: {{$apartment->KapiNo}}</span>
                        <span>Kullanılış Şekli: {{$apartment->KullanilisSekli}}</span>
                        <span>Bulunduğu Kat: {{$apartment->BulunduguKat}}</span>
                        <span>Oda Sayısı: {{$apartment->OdaSayisi}}</span>
                        <span>Yön: {{$apartment->Yon}}</span>
                        <span>Net Alan: {{$apartment->NetM2}}</span>
                        <span>Açık Net Alan: {{$apartment->AcikNetM2}}</span>
                        <span>Brüt Alan: {{$apartment->BrutM2}}</span>
                        @if(!empty($apartment->Eklenti1Nitelik))
                            <span>1. Eklenti Nitelik: {{$apartment->Eklenti1Nitelik}}</span>
                        @endif
                        @if(!empty($apartment->Eklenti1NetM2))
                            <span>1. Eklenti Net Alan: {{$apartment->Eklenti1NetM2}}</span>
                        @endif
                        @if(!empty($apartment->Eklenti1BrutM2))
                            <span>1. Eklenti Brüt Alan: {{$apartment->Eklenti1BrutM2}}</span>
                        @endif
                        @if(!empty($apartment->Eklenti2Nitelik))
                            <span>2. Eklenti Nitelik: {{$apartment->Eklenti2Nitelik}}</span>
                        @endif
                        @if(!empty($apartment->Eklenti2NetM2))
                            <span>2. Eklenti Net Alan: {{$apartment->Eklenti2NetM2}}</span>
                        @endif
                        @if(!empty($apartment->Eklenti2BrutM2))
                            <span>2. Eklenti Brüt Alan: {{$apartment->Eklenti2BrutM2}}</span>
                        @endif
                        @if(!empty($apartment->Eklenti3Nitelik))
                            <span>3. Eklenti Nitelik: {{$apartment->Eklenti3Nitelik}}</span>
                        @endif
                        @if(!empty($apartment->Eklenti3NetM2))
                            <span>3. Eklenti Net Alan: {{$apartment->Eklenti3NetM2}}</span>
                        @endif
                        @if(!empty($apartment->Eklenti3BrutM2))
                            <span>3. Eklenti Brüt Alan: {{$apartment->Eklenti3BrutM2}}</span>
                        @endif
                        @if(!empty($apartment->Eklenti4Nitelik))
                            <span>4. Eklenti Nitelik: {{$apartment->Eklenti4Nitelik}}</span>
                        @endif
                        @if(!empty($apartment->Eklenti4NetM2))
                            <span>4. Eklenti Net Alan: {{$apartment->Eklenti4NetM2}}</span>
                        @endif
                        @if(!empty($apartment->Eklenti4BrutM2))
                            <span>4. Eklenti Brüt Alan: {{$apartment->Eklenti4BrutM2}}</span>
                        @endif
                        @if(!empty($apartment->Eklenti5Nitelik))
                            <span>5. Eklenti Nitelik: {{$apartment->Eklenti5Nitelik}}</span>
                        @endif
                        @if(!empty($apartment->Eklenti5NetM2))
                            <span>5. Eklenti Net Alan: {{$apartment->Eklenti5NetM2}}</span>
                        @endif
                        @if(!empty($apartment->Eklenti5BrutM2))
                            <span>5. Eklenti Brüt Alan: {{$apartment->Eklenti5BrutM2}}</span>
                        @endif
                        <hr>
                        <span>Gayrimenkul Durumu: {{$apartment->GayrimenkulDurumu}}</span>
                        <span>Satış Değeri: {{$apartment->SatisDegeri}}</span>
                        @if(!empty($apartment->SozlesmeNo))
                            <span>Sözleşme No: {{$apartment->SozlesmeNo}}</span>
                        @endif
                    </div>
                </div>
            </div>
        @endif
    </section>

    <div id="plan-table" class="col-sm-9 ml-sm-auto col-md-10 p-0 m-0" role="tablist" aria-multiselectable="true">
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
                <img id="img-up" src="/img/down.png" class="up" role="button" onclick="upIconChange()"
                     data-toggle="collapse" data-parent="#plan-table" data-target="#collapseOne" style="width: 30px"/>
            </div>
            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-block" id="apartmentList">
                    @include('sections.apartment_list')
                </div>
            </div>
        </div>
    </div>
</main>



    <div class="modal fade" id="slideModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div id="slideControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <iframe class="d-block w-100" width="720" height="480" src="https://www.youtube.com/embed/M7lc1UVf-VE?controls=0&showinfo=0" frameborder="0"></iframe>
            </div>
            <div class="carousel-item">
                <iframe class="d-block w-100" width="720" height="480" src="https://www.youtube.com/embed/M7lc1UVf-VE?controls=0&showinfo=0" frameborder="0"></iframe>
            </div>
        </div>
        <a class="carousel-control-prev" href="#slideControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slideControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
        </div>
      </div>
      </div>
    </div>

    <div class="modal fade" id="slidePhoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div id="photoControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" width="720" height="480" src="http://192.81.215.163/uploads/project/phpRksG8G.jpg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" width="720" height="480" src="http://192.81.215.163/uploads/project/phpRksG8G.jpg">
            </div>
        </div>
        <a class="carousel-control-prev" href="#photoControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#photoControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
        </div>
      </div>
      </div>
    </div>