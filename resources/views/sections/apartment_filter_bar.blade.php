@include('parts.kullanilis_sekli')
@include('parts.yon')
@include('parts.bulundugu_kat')
@include('parts.oda_sayisi')
<ul class="nav nav-pills flex-column">
    <li class="nav-item" data-toggle="collapse" data-target="#metraj">
        <a class="nav-link" href="#">Net Metraj<span class="arrow"></span></a>
    </li>
    <ul class="sub-menu collapse show" id="metraj">
        <li class="nav-item">
            <div class="nav-link">
                <label>{{$apartment->NetM2}}</label>
            </div>
        </li>
    </ul>
</ul>
<ul class="nav nav-pills flex-column">
    <li class="nav-item" data-toggle="collapse" data-target="#fiyat_araligi">
        <a class="nav-link" href="#">Satış Fiyat Aralığı<span class="arrow"></span></a>
    </li>
    <ul class="sub-menu collapse show" id="fiyat_araligi">
        <li class="nav-item">
            <div class="nav-link">
                <label>{{printThousandSeparator($apartment->SatisDegeri)}} TL</label>
            </div>
        </li>
    </ul>
</ul>
@include('parts.ada')
@include('parts.parsel')
@include('parts.blok')
<ul class="nav nav-pills flex-column">
    <li class="nav-item" data-toggle="collapse" data-target="#kapi_no">
        <a class="nav-link" href="#">Kapı Numarası<span class="arrow"></span></a>
    </li>
    <ul class="sub-menu collapse show" id="kapi_no">
        <li class="nav-item">
            <div class="nav-link">
                <label>{{$apartment->KapiNo}}</label>
            </div>
        </li>
    </ul>
</ul>
<ul class="nav nav-pills flex-column">
    <li class="nav-item" data-toggle="collapse" data-target="#sozlesme">
        <a class="nav-link" href="#">Sözleşme Numarası<span class="arrow"></span></a>
    </li>
    <ul class="sub-menu collapse show" id="sozlesme">
        <li class="nav-item">
            <div class="nav-link">
                <label>{{$apartment->SozlesmeNo}}</label>
            </div>
        </li>
    </ul>
</ul>