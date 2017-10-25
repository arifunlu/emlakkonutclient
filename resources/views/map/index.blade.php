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
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
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
            @if ($location) var triangleCoords = {!!$location->map_data ? $location->map_data : json_encode(null); !!};
            var lat = triangleCoords[0][0] ? triangleCoords[0][0].split(",")[0] : 41.0082;
            var lng = triangleCoords[0][0] ? triangleCoords[0][0].split(",")[1] : 28.9784;
            var map = new google.maps.Map(document.getElementById("map"), {
                center: {lat: parseFloat(lat), lng: parseFloat(lng)},
                zoom: 15,
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