<ul class="nav nav-pills flex-column">
    <li class="nav-item" data-toggle="collapse" data-target="#metraj">
        <a class="nav-link" href="#">Net Metraj<span class="arrow"></span></a>
    </li>
    <ul class="sub-menu collapse show" id="metraj">
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