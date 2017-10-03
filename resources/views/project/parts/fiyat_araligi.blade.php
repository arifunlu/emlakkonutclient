<ul class="nav nav-pills flex-column">
    <li class="nav-item" data-toggle="collapse" data-target="#fiyat_araligi">
        <a class="nav-link" href="#">Satış Fiyat Aralığı<span class="arrow"></span></a>
    </li>
    <ul class="sub-menu collapse show" id="fiyat_araligi">
        <li class="nav-item">
            <div class="nav-link">
                <input id="priceMin" name="fiyatMin" value="{{old('priceMin')}}" type="text" placeholder="min TL">
            </div>
        </li>
        <li class="nav-item">
            <div class="nav-link">
                <input id="priceMax" name="fiyatMax" value="{{old('priceMax')}}" type="text" placeholder="max TL">
            </div>
        </li>
    </ul>
</ul>