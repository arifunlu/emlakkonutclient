@include('parts.kullanilis_sekli')@include('parts.ada')@include('parts.parsel')@include('parts.blok')@include('parts.oda_sayisi')@include('parts.bulundugu_kat')@include('parts.yon')@include('parts.metraj')@include('parts.fiyat_araligi')@include('parts.kapi_no')@include('parts.sozlesme')

@section('javascript')
    @parent
    <script>
        var data = {};

        function onChangeFilters(e) {
            var d;

            if (e.checked) {
                d = e.value;
            } else {
                d = "";
            }

            var param = e.id;

            if (param.indexOf("ada") > -1) {
                data.ada = d;
            } else if (param.indexOf("parsel") > -1) {
                data.parsel = d;
            } else if (param.indexOf("kullanis") > -1) {
                data.kullanis = d;
            } else if (param.indexOf("yon") > -1) {
                data.yon = d;
            } else if (param.indexOf("kat") > -1) {
                data.kat = d;
            } else if (param.indexOf("oda") > -1) {
                data.oda = d;
            } else if (param.indexOf("block") > -1) {
                data.blok = d;
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
            } else if (s === "metraj") {
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