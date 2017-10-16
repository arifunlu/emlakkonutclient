@extends('layouts.app')
<?php /** @var App\Model\ProjectLocation $location */ ?>
@section('content')
    <div class="container-fluid">
        <div class="row">
            <button type="button" title="Kapat" class="btn btn-primary btn-sm rounded-circle btn-close" onclick="window.location='{!! URL::route('project.detail', $location->project_id) !!}'">
                <img src="/img/cancel.svg" style="width: 14px; height: 21px;"/>
            </button>
            <div class="col-7 p-0" style="margin: auto;">
                @if($location->photo):
                    <img  src="{{$location->photo->getImageUrl()}}"
                          onclick="window.open('{!! $location->photo->getImageUrl() !!}', 'Kroki İmajı', 'width=1280,height=720')" style="width: 100%;"/>
                @endif;
            </div>

            <div class="col-5 p-0">
                <div id="map"></div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    @parent
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAI8qNnWc7vcryJwCLs3Q5DWymgNyO3UTM&libraries=drawing&callback=initMap" async defer></script>
    <script>
        function initMap() {
            var polygonArray = [];
            @if ($location)
                var triangleCoords = {!!$location->map_data ? $location->map_data : json_encode(null); !!};
            var lat = triangleCoords[0][0].split[","][0];
            var lng = triangleCoords[0][0].split[","][1];
            var map = new google.maps.Map(document.getElementById("map"), {
                center: {lat: lat ? parseFloat(lat) : 41.0082, lng: lng ? parseFloat(lng) : 28.9784},
                zoom: 14,
                scaleControl: false,
                streetViewControl: false,
                mapTypeControl: false
            });

            if (triangleCoords) {
                for (var i in triangleCoords) {
                    triangleCoords[i] = $.map(triangleCoords[i], function(obj) {
                        var items = obj.split(",");
                        return {lat: parseFloat(items[0]), lng: parseFloat(items[1])}
                    });
                }

                var polygonMap = new google.maps.Polygon({
                    paths: triangleCoords,
                    strokeColor: '#FF0000',
                    strokeOpacity: 0.8,
                    strokeWeight: 3,
                    fillColor: '#FF0000',
                    fillOpacity: 0.35
                });
                polygonMap.setMap(map);
            }
            @endif
        }
    </script>
@endsection