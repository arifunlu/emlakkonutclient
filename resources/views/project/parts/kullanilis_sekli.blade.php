<ul class="nav nav-pills flex-column">
    <li class="nav-item" data-toggle="collapse" data-target="#KullanimSekli">
        <a class="nav-link" href="#">Kullanım Şekli<span class="arrow"></span></a>
    </li>
    <ul class="sub-menu collapse show" id="KullanimSekli">
        @foreach($kullanilisSekli as $kullanilis)
            <li class="nav-item">
                <div class="nav-link">
                    <input id="checkbox1" type="checkbox">
                    <label for="checkbox1">{{$kullanilis }}</label>
                </div>
            </li>
        @endforeach
    </ul>
</ul>