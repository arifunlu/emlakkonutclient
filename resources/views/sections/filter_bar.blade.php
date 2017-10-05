@include('parts.kullanilis_sekli')
@include('parts.yon')
@include('parts.bulundugu_kat')
@include('parts.oda_sayisi')
@include('parts.metraj')
@include('parts.fiyat_araligi')
@include('parts.ada')
@include('parts.parsel')
@include('parts.blok')
@include('parts.kapi_no')
@include('parts.sozlesme')

@section('javascript')
    @parent
    <script >
        var data = {};

        function onChangeFilters(e) {
            if (e.checked) {
                var param = e.id;

                if (param.indexOf("ada") > -1) {
                    data.ada = e.value;
                } else if (param.indexOf("parsel") > -1) {
                    data.parsel = e.value;
                } else if (param.indexOf("kullanis") > -1) {
                    data.kullanis = e.value;
                } else if (param.indexOf("yon") > -1) {
                    data.yon = e.value;
                } else if (param.indexOf("kat") > -1) {
                    data.kat = e.value;
                } else if (param.indexOf("oda") > -1) {
                    data.oda = e.value;
                } else if (param.indexOf("blok") > -1) {
                    data.blok = e.value;
                }

                $.post("/search", {
                    data: JSON.stringify(data),
                    success: function(data) {

                    }
                });
            }
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

            $.post("/search", {
                data: JSON.stringify(data),
                success: function(data) {

                }
            });
        }
    </script>
@endsection