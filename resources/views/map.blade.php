@extends('layouts.app')

@section('content')
      <div class="container-fluid">
        <div class="row">
          <button type="button" title="Kapat" class="btn btn-primary btn-sm rounded-circle btn-close" onclick="window.location='{{ URL::route('detail') }}'"><img src="/img/cancel.svg" style="width: 14px; height: 21px;"/></button>
          <div class="col-7 p-0">
            <img src="http://www.timeturk.com/resim/detay/69/695941.jpg" style="width: 100%;"/>
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
          var marker = "http://basaksehirbahcesehir.com/wp-content/uploads/2015/11/kroki2-150x150.jpg";

          function initMap() {
              var map = new google.maps.Map(document.getElementById("map"), {
                  center: {lat: 41.0082, lng: 28.9784},
                  zoom: 14,
                  scaleControl: false,
                  streetViewControl: false,
                  mapTypeControl: false
              });
              var drawingManager = new google.maps.drawing.DrawingManager({
                  drawingMode: google.maps.drawing.OverlayType.MARKER,
                  drawingControl: true,
                  drawingControlOptions: {
                      style: google.maps.MapTypeControlStyle.VERTICAL_BAR,
                      position: google.maps.ControlPosition.RIGHT_CENTER,
                      drawingModes: ["polygon"]
                  },
                  markerOptions: {icon: marker},
                  circleOptions: {
                      fillColor: '#ffff00',
                      fillOpacity: 1,
                      strokeWeight: 5,
                      clickable: false,
                      editable: true,
                      zIndex: 1
                  }
              });
              drawingManager.setMap(map);
          }
      </script>
@endsection