<ul class="nav nav-pills flex-column">
    <li class="nav-item" data-toggle="collapse" data-target="#nmetraj">
        <a class="nav-link" href="#">Net Metraj<span class="arrow"></span></a>
    </li>
    <ul class="sub-menu collapse show" id="nmetraj">
        <li class="nav-item">
            <div class="nav-link">
                <input id="netM2Min" name="netM2Min" value="{{old('netM2Min')}}" type="number" placeholder="min metrekare">
            </div>
        </li>
        <li class="nav-item">
            <div class="nav-link">
                <input id="netM2Max" name="netM2Max" value="{{old('netM2Max')}}" type="number" placeholder="max metrekare">
            </div>
        </li>
        <li class="nav-item">
            <div class="nav-link">
                <button type="button" onclick="onClickTextFilters('NetM2')">Ara</button>
            </div>
        </li>
    </ul>
</ul>