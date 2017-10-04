<ul class="nav nav-pills flex-column">
    <li class="nav-item" data-toggle="collapse" data-target="#ada">
        <a class="nav-link" href="#">Ada<span class="arrow"></span></a>
    </li>
    <ul class="sub-menu collapse show" id="ada">
        @foreach($islands as $island)
            <li class="nav-item">
                <div class="nav-link">
                    <input id="ada{{$island }}" name="ada[]" value="{{$island }}" type="checkbox" onchange="onChangeFilters(this)">
                    <label for="ada{{$island }}">{{$island }}</label>
                </div>
            </li>
        @endforeach
    </ul>
</ul>