<ul class="nav nav-pills flex-column">
    <li class="nav-item" data-toggle="collapse" data-target="#odaSayisi">
        <a class="nav-link" href="#">Oda Sayısı<span class="arrow"></span></a>
    </li>
    <ul class="sub-menu collapse show" id="odaSayisi">
        @foreach($odaSayisi as $oda)
            <li class="nav-item">
                <div class="nav-link">
                    <input id="oda{{$oda }}" name="oda[]" value="{{$oda}}" type="checkbox" onchange="onChangeFilters(this)">
                    <label for="oda{{$oda }}">{{$oda }}</label>
                </div>
            </li>
        @endforeach
    </ul>
</ul>