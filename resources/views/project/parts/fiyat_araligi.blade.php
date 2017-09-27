<ul class="nav nav-pills flex-column">
    <li class="nav-item" data-toggle="collapse" data-target="#fiyat_araligi">
        <a class="nav-link" href="#">Satış Fiyat Aralığı<span class="arrow"></span></a>
    </li>
    <ul class="sub-menu collapse show" id="fiyat_araligi">
        @foreach($yon as $cephe)
            <li class="nav-item">
                <div class="nav-link">
                    <input id="checkbox{{$cephe }}" type="checkbox">
                    <label for="checkbox{{$cephe }}">{{$cephe }}</label>
                </div>
            </li>
        @endforeach
    </ul>
</ul>