<ul class="nav nav-pills flex-column">
    <li class="nav-item" data-toggle="collapse" data-target="#parsel">
        <a class="nav-link" href="#">Parsel<span class="arrow"></span></a>
    </li>
    <ul class="sub-menu collapse show" id="parsel">
        @foreach($parcels as $parcel)
            <li class="nav-item">
                <div class="nav-link">
                    <input id="parcel{{$parcel }}" name="parsel[]" value="{{$parcel}}" type="checkbox">
                    <label for="parcel{{$parcel }}">{{$parcel }}</label>
                </div>
            </li>
        @endforeach
    </ul>
</ul>