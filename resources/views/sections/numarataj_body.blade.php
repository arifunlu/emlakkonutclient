<main class="col-sm-9 ml-sm-auto col-md-10 p-0">
    <section id="sectionIcerik">
        <div class="btn-group btn-grp-fix" role="group" style="position: fixed; z-index: 999; left: 32%;">
            <button id="btnGenelVaziyet" type="button" class="btn btn-success tableheader" onclick="window.location='{{URL::route('project.detail', $project->id)}}'">
                G. VAZİYET PLANI
            </button>
            <!--<button id="btnBlockVaziyet" type="button" class="btn btn-success tableheader" onclick="window.location='{{URL::route('block360.detail', $apartment->id)}}'">
                BLOK
            </button>-->
            <button id="btnParselVaziyet" type="button" class="btn btn-success tableheader active">
                NUMARATAJ
            </button>
            <button id="btnDaire" type="button" class="btn btn-success tableheader" disabled>
                DAİRE PLANI
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
</main>
