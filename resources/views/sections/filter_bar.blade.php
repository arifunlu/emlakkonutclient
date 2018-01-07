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
        var filterBarUrl = {!! json_encode(URL::route('search')) !!};
    </script>
    <script src="/js/filter-bar.js"></script>
@endsection