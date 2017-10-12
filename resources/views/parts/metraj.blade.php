<ul class="nav nav-pills flex-column">
    <li class="nav-item" data-toggle="collapse" data-target="#metraj">
        <a class="nav-link" href="#">Brüt Metraj<span class="arrow"></span></a>
    </li>
    <ul class="sub-menu collapse show" id="metraj">
        <li class="nav-item">
            <div class="nav-link">
                <input id="brutM2Min" name="brutM2Min" value="{{old('brutM2Min')}}" type="number" placeholder="min metrekare">
            </div>
        </li>
        <li class="nav-item">
            <div class="nav-link">
                <input id="brutM2Max" name="brutM2Max" value="{{old('brutM2Max')}}" type="number" placeholder="max metrekare">
            </div>
        </li>
        <li class="nav-item">
            <div class="nav-link">
                <button type="button" onclick="onClickTextFilters('brutM2')">Ara</button>
            </div>
        </li>
    </ul>
</ul>