<main class="col-sm-9 ml-sm-auto col-md-10 p-0">
    <section id="sectionIcerik">
        <div class="btn-group btn-grp-fix" role="group" style="position: fixed; z-index: 999; left: 30%;">
            <button id="btnGenelVaziyet" type="button" class="btn btn-success active tableheader">
                G. VAZİYET PLANI
            </button>
            <!--<button id="btnBlockVaziyet" type="button" class="btn btn-success tableheader" disabled>
                BLOK
            </button>-->
            <button id="btnParselVaziyet" type="button" class="btn btn-success tableheader" disabled>
                NUMARATAJ
            </button>
            <button id="btnDaire" type="button" class="btn btn-success tableheader" disabled>
                DAİRE PLANI
            </button>
        </div>
        <div class="btn-group" role="group" style="position: fixed; z-index: 999; left: 52%;">
            <button id="btnDaire" type="button" class="btn btn-primary" style="border-top-left-radius: 0; border-top-right-radius: 0;">
                SANAL MAKET
            </button>
        </div>
        <div class="btn-group" role="group" style="position: fixed; z-index: 999; left: 60.5%;">
            <button id="btnDaire" type="button" class="btn btn-danger" style="border-top-left-radius: 0; border-top-right-radius: 0;" data-toggle="collapse" data-target="#medyaIcerik">
                MEDYA
            </button>
        </div>
        <div class="d-flex flex-row justify-content-between">
            <div style="display: inherit; position: absolute; left: 60%; top: 3px;">
                <div id="medyaIcerik" class="collapse">
                    <div class="d-flex justify-content-end">
                            <div id="slideVideo" role="button" style="margin-right: 1rem;"><img src="/img/video.svg" style="width: 2rem;"/></div>
                            <div id="slideDoc" role="button" style="margin-right: 1rem;"><img src="/img/document.svg" style="width: 2rem;"/></div>
                            <div id="slideFoto" role="button" style="margin-right: 1rem;"><img src="/img/photo_gallery.svg" style="width: 2rem;"/></div>
                    </div>
                </div>
            </div>
            <div></div>
            <div id="image-map-pro-container"></div>
            <div class="d-flex flex-row justify-content-end" style="height: 91vh;">
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
                <div class="card-block" id="apartmentList">
                    @include('sections.apartment_list')
                </div>
            </div>
        </div>
    </div>

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

    </div>
</main>
