<ul class="nav nav-pills flex-column">
    <li class="nav-item" data-toggle="collapse" data-target="#blok">
        <a class="nav-link" href="#">Blok<span class="arrow"></span></a>
    </li>
    <ul class="sub-menu collapse show" id="blok">
        @foreach($blocks as $block)
            <li class="nav-item">
                <div class="nav-link">
                    <input id="block{{$block }}" name="blok[]" value="{{$block }}" type="checkbox" onchange="onChangeFilters(this)">
                    <label for="block{{$block }}">{{$block }}</label>
                </div>
            </li>
        @endforeach
    </ul>
</ul>