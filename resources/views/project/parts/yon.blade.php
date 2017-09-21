<ul class="nav nav-pills flex-column">
    <li class="nav-item" data-toggle="collapse" data-target="#yon">
        <a class="nav-link" href="#">Yon<span class="arrow"></span></a>
    </li>
    <ul class="sub-menu collapse show" id="yon">
        @foreach($yon as $cephe)
            <li class="nav-item">
                <div class="nav-link">
                    <input id="checkbox1" type="checkbox">
                    <label for="checkbox1">{{$cephe }}</label>
                </div>
            </li>
        @endforeach
    </ul>
</ul>