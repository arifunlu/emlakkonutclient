<ul class="nav nav-pills flex-column">
    <li class="nav-item" data-toggle="collapse" data-target="#metraj">
        <a class="nav-link" href="#">Brüt Metraj<span class="arrow"></span></a>
    </li>
    <ul class="sub-menu collapse show" id="metraj">
        <li class="nav-item">
            <div class="nav-link">
                <input id="netM2Min" name="netM2" value="{{old('netM2Min')}}" type="text" placeholder="min metrekare">
            </div>
        </li>
        <li class="nav-item">
            <div class="nav-link">
                <input id="netM2Max" name="netM2" value="{{old('netM2Max')}}" type="text" placeholder="max metrekare">
            </div>
        </li>
        <li class="nav-item">
            <div class="nav-link">
                <button type="button" onclick="onClickTextFilters('metraj')">Ara</button>
            </div>
        </li>
    </ul>
</ul>