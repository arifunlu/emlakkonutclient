@include('parts.kullanilis_sekli')
@include('parts.ada')
@include('parts.parsel')
@include('parts.blok')
@include('parts.oda_sayisi')
@include('parts.bulundugu_kat')
@include('parts.yon')
@include('parts.metraj')
@include('parts.NetM2')
@include('parts.fiyat_araligi')
@include('parts.kapi_no')
@include('parts.sozlesme')

@section('javascript')
    @parent
    <script>
        var data = {
            ada: [],
            parsel: [],
            kullanis: [],
            yon: [],
            kat: [],
            oda: [],
            blok: []
        };

        function onChangeFilters(e) {
            var param = e.id;

            if (param.indexOf("ada") > -1) {
                if (e.checked) {
                    data.ada.push(e.value);
                } else {
                    data.ada.splice(data.ada.indexOf(e.value), 1);
                }
            } else if (param.indexOf("parsel") > -1) {
                if (e.checked) {
                    data.parsel.push(e.value);
                } else {
                    data.parsel.splice(data.parsel.indexOf(e.value), 1);
                }
            } else if (param.indexOf("kullanis") > -1) {
                if (e.checked) {
                    data.kullanis.push(e.value);
                } else {
                    data.kullanis.splice(data.kullanis.indexOf(e.value), 1);
                }
            } else if (param.indexOf("yon") > -1) {
                if (e.checked) {
                    data.yon.push(e.value);
                } else {
                    data.yon.splice(data.yon.indexOf(e.value), 1);
                }
            } else if (param.indexOf("kat") > -1) {
                if (e.checked) {
                    data.kat.push(e.value);
                } else {
                    data.kat.splice(data.kat.indexOf(e.value), 1);
                }
            } else if (param.indexOf("oda") > -1) {
                if (e.checked) {
                    data.oda.push(e.value);
                } else {
                    data.oda.splice(data.oda.indexOf(e.value), 1);
                }
            } else if (param.indexOf("block") > -1) {
                if (e.checked) {
                    data.blok.push(e.value);
                } else {
                    data.blok.splice(data.blok.indexOf(e.value), 1);
                }
            }

            $.ajax({
                type: "POST",
                url: {!! json_encode(URL::route('search')) !!},
                data: data,
                success: function (responseData) {
                    $('#apartmentList').html(responseData);
                }
            });
        }

        function onClickTextFilters(s) {
            if (s === "fiyat") {
                data.priceMin = document.getElementById("priceMin").value;
                data.priceMax = document.getElementById("priceMax").value;
            } else if (s === "kapi") {
                data.kapiNo = document.getElementById("kapiNo").value;
            } else if (s === "brutM2") {
                data.brutM2Min = document.getElementById("brutM2Min").value;
                data.brutM2Max = document.getElementById("brutM2Max").value;
            } else if(s === "NetM2") {
                data.netM2Min = document.getElementById("netM2Min").value;
                data.netM2Max = document.getElementById("netM2Max").value;
            } else if (s === "sozlesme") {
                data.sozlesme = document.getElementById("sozlesme").value;
            }

            $.ajax({
                type: "POST",
                url: {!! json_encode(URL::route('search')) !!},
                data: data,
                success: function (responseData) {
                    $('#apartmentList').html(responseData);
                }
            });
        }
    </script>
@endsection