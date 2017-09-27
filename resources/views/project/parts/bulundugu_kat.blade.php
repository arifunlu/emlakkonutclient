<ul class="nav nav-pills flex-column">
    <li class="nav-item" data-toggle="collapse" data-target="#bulunduguKat">
        <a class="nav-link" href="#">Bulunduğu Kat<span class="arrow"></span></a>
    </li>
    <ul class="sub-menu collapse show" id="bulunduguKat">
        @foreach($bulunduguKat as $kat)
            <li class="nav-item">
                <div class="nav-link">
                    <input id="checkbox{{$kat }}" type="checkbox">
                    <label for="checkbox{{$kat }}">{{$kat }}</label>
                </div>
            </li>
        @endforeach
    </ul>
</ul>