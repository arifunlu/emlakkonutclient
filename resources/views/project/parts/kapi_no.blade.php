<ul class="nav nav-pills flex-column">
    <li class="nav-item" data-toggle="collapse" data-target="#kapi_no">
        <a class="nav-link" href="#">Kapı Numarası<span class="arrow"></span></a>
    </li>
    <ul class="sub-menu collapse show" id="kapi_no">
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