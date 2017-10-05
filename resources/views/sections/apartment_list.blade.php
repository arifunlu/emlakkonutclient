<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
    <div class="card-block">
        <table class="table table-striped" id="apartmentList">
            <thead class="tableheader">
                <tr>
                    <th>BLOK</th>
                    <th>KAPI NO</th>
                    <th>KAT</th>
                    <th>YÖN</th>
                    <th>ODA</th>
                    <th>BRÜT METREKARE</th>
                    <th>SATIŞ FİYATI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($apartments as $apartment)
                    <tr>
                        <td>
                            <a href="{{URL::route('block.detail', $apartment->id)}}">{{$apartment->BlokNo}}</a>
                        </td>
                        <td>
                            <a href="{{URL::route('apartment.detail', $apartment->id)}}">{{$apartment->KapiNo}}</a>
                        </td>
                        <td>{{$apartment->BulunduguKat}}</td>
                        <td>{{$apartment->Yon}}</td>
                        <td>{{$apartment->OdaSayisi}}</td>
                        <td>{{$apartment->BrutM2}}</td>
                        <td>{{$apartment->BrutM2}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>