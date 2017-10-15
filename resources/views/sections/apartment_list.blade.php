<table class="table table-striped">
    <thead class="tableheader">
        <tr>
            <th>BLOK</th>
            <th>KAPI NO</th>
            <th>KAT</th>
            <th>KULLANIM ŞEKLİ</th>
            <th>YÖN</th>
            <th>ODA</th>
            <th>BRÜT ALAN</th>
            <th>NET ALAN</th>
            <th>SATIŞ FİYATI</th>
        </tr>
    </thead>
    <tbody>
        @foreach($apartments as $apartment)
            @php
                switch ($apartment->GayrimenkulDurumu) {
                    case 'Satıldı':
                         $style = 'style="background-color: rgba(255, 0, 0, 0.5); border-bottom: 1px solid #efeded;"';
                        break;
                    case 'Ön Satış':
                        $style = 'style="background-color: rgba(255, 255, 0, 0.5); border-bottom: 1px solid #efeded;"';
                        break;
                    default:
                        $style = '';
                }
            @endphp
            <tr {!! $style !!}>
                <td>
                    <a href="{{URL::route('block.detail', $apartment->id)}}">{{$apartment->BlokNo}}</a>
                </td>
                <td>
                    <a href="{{URL::route('apartment.detail', $apartment->id)}}">{{$apartment->KapiNo}}</a>
                </td>
                <td>{{$apartment->BulunduguKat}}</td>
                <td>{{$apartment->KullanilisSekli}}</td>
                <td>{{$apartment->Yon}}</td>
                <td>{{$apartment->OdaSayisi}}</td>
                <td>{{$apartment->BrutM2}}</td>
                <td>{{$apartment->NetM2}}</td>
                <td>{{printThousandSeparator($apartment->SatisDegeri)}} TL</td>
            </tr>
        @endforeach
    </tbody>
</table>
