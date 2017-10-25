<main class="col-sm-9 ml-sm-auto col-md-10 p-0">
    <section id="sectionIcerik">
        <div class="btn-group btn-grp-fix" role="group">
            <button id="btnGenelVaziyet" type="button" class="btn btn-success active tableheader">
                G. VAZİYET PLANI
            </button>
            <button id="btnParselVaziyet" type="button" class="btn btn-success tableheader" disabled>
                BLOK
            </button>
            <button id="btnParselVaziyet" type="button" class="btn btn-success tableheader" disabled>
                NUMARATAJ
            </button>
            <button id="btnDaire" type="button" class="btn btn-success tableheader" disabled>
                DAİRE PLANI
            </button>
        </div>
        <div class="d-flex flex-row justify-content-between">
            <div></div>
            <div id="image-map-pro-container"></div>
            <div style="display: inherit;position: absolute;right: 0;top: 37rem;">
                <div style="z-index: 100;">
                    <img src="/img/medya.png" role="button" data-toggle="collapse" data-target="#medyaIcerik" onmouseover="this.style.opacity=.6;this.filters.alpha.opacity=60;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;"/>
                </div>
                <div id="medyaIcerik" class="collapse">
                    <div class="d-flex justify-content-around align-items-stretch">
                        <p><img src="/img/cam.svg" style="width: 2rem;"/>Tanıtım Videosu</p>
                        <p><img src="/img/doc.svg" style="width: 2rem;"/>Doküman</p>
                        <p><img src="/img/img.svg" style="width: 2rem;"/>Foto Galeri</p>
                    </div>
                </div>
            </div>
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
