<ul class="nav nav-pills flex-column">
    <li class="nav-item" data-toggle="collapse" data-target="#bulunduguKat">
        <a class="nav-link" href="#">Kat<span class="arrow"></span></a>
    </li>
    <ul class="sub-menu collapse show" id="bulunduguKat">
        @foreach($bulunduguKat as $kat)
            <li class="nav-item">
                <div class="nav-link">
                    <input id="kat{{$kat }}" name="kat[]" value="{{$kat}}" type="checkbox">
                    <label for="kat{{$kat }}">{{$kat }}</label>
                </div>
            </li>
        @endforeach
    </ul>
</ul>