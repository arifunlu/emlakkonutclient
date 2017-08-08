<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
          body {
            padding-top: 5.5rem;
            font-family: 'Catamaran', sans-serif;
            background-color: #fff;
          }

          h1 {
            margin-bottom: 20px;
            padding-bottom: 9px;
            border-bottom: 1px solid #eee;
          }

          .sidebar {
            position: fixed;
            top: 4.2rem;
            bottom: 0;
            left: 0;
            z-index: 1000;
            padding: 20px;
            overflow-x: hidden;
            overflow-y: auto;
            /* Scrollable contents if viewport is shorter than content. */
            /* border-right: 1px solid #eee; */
            background-color: #005aab;
          }

          .sidebar {
            padding-left: 0;
            padding-right: 0;
          }

          .sidebar .nav {
            margin: 20px 0;
          }

          .sidebar .nav-item {
            width: 100%;
          }

          .sidebar .nav-item+.nav-item {
            margin-left: 0;
          }

          .sidebar .nav-link {
            border-radius: 0;
            color: #fff;
            padding: .3rem 1rem;
          }

          .placeholders {
            padding-bottom: 3rem;
          }

          .placeholder img {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
          }

          .btn {
            border-radius: 1.25rem;
          }

          .bg-custom {
            background-color: #f2f2f2 !important;
            box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.25);
          }

          .navbar-light .navbar-nav .nav-link,
          .navbar-light .navbar-nav .nav-link:focus,
          .navbar-light .navbar-nav .nav-link:hover {
            color: #0e1a35;
          }

          .sidebar>.nav>.nav-item {
            font-size: 1.5rem;
            border-left: 10px solid #00a65e;
          }

          .tableheader {
            background-color: #00a65e;
            color: #f2f2f2;
          }

          .table-striped td,
          .table-striped th {
            border: none;
            border-left: 1px solid #efeded;
          }

          .table-striped tbody tr:nth-of-type(odd) {
            background-color: #bdbaba;
          }

          .table-striped tbody tr:nth-of-type(even) {
            background-color: #cac8c8;
          }

          .navbar-light .navbar-brand {
            margin: 0 auto;
          }

          .navbar-light .navbar-brand>img {
            max-height: 4rem;
          }

          .table-striped thead th {
            border-bottom: none;
          }

          .table-responsive {
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
          }

          .sub-menu {
            list-style: none;
          }

          .sidebar .navbar-brand>img {
            max-height: 4rem;
            margin: 0 50% 25px;
          }

          .sidebar .navbar-brand {
            margin: 0;
            padding: 1rem;
            white-space: normal;
            color: #fff;
            text-align: center;
            background-color: #00a65e;
          }

          .ws {
            height: 2rem;
            background: #005AAB;
            border-radius: 0 0 .8rem .8rem;
          }

          .ws_left {
            position: absolute;
            top: 0;
            right: 100%;
            border-radius: 1rem 0 0 1rem;
          }

          .ws_right {
            position: absolute;
            top: 0;
            left: 100%;
            border-radius: 0 1rem 1rem 0;
          }

          .ws_left:before {
            border-top-right-radius: 1rem;
            background: white;
            z-index: 2;
          }

          .ws_left:after {
            background: #005AAB;
          }

          .ws_right:before {
            border-top-left-radius: 1rem;
            background: white;
            z-index: 2;
          }

          .ws_right:after {
            background: #005AAB;
          }

          .ws_right:before,
          .ws_right:after {
            left: 0;
          }

          .ws_left:before,
          .ws_left:after,
          .ws_right:before,
          .ws_right:after {
            content: '';
            position: absolute;
            width: 1rem;
            height: 1rem;
            right: 0;
          }

          .trans {
            transform: rotate(90deg);
          }

          .trans180 {
            transform: rotate(180deg);
          }

          .retrans {
            transform: rotate(-90deg);
            padding: .3rem .5rem;
          }

          .retrans180 {
            transform: rotate(180deg);
            padding: .3rem .5rem;
            color: white;
          }

          .bg-red,
          .bg-red:after {
            background-color: #EE131D;
          }

          .bg-green,
          .bg-green:after {
            background-color: #00a65e;
          }

          #sectionIcerik {
            margin-top: -1rem;
          }

          #rightIcerik {
            background-color: #F2F2F2;
            padding: 1rem;
            width: 20rem;
          }

          .bg-gray:before {
            background-color: #F2F2F2;
          }

          .up {
            float: right;
            position: relative;
            top: -2rem;
            margin-right: 2rem;
            margin-bottom: -2rem;
          }

          .btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
            border-top-left-radius: 0;
          }

          .btn-group>.btn:last-child:not(:first-child),
          .btn-group>.dropdown-toggle:not(:first-child) {
            border-top-right-radius: 0;
          }

          .roundedTwo {
            width: 28px;
            height: 28px;
            position: relative;
            margin: 20px auto;
            background: #fcfff4;
            background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
            border-radius: 50px;
            box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0,0,0,0.5);
            label {
              width: 20px;
              height: 20px;
              position: absolute;
              top: 4px;
              left: 4px;
              cursor: pointer;
              background: linear-gradient(top, #222 0%, #45484d 100%);
              border-radius: 50px;
              box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,1);
              &:after {
                content: '';
                width: 9px;
                height: 5px;
                position: absolute;
                top: 5px;
                left: 4px;
                border: 3px solid #fcfff4;
                border-top: none;
                border-right: none;
                background: transparent;
                opacity: 0;
                transform: rotate(-45deg);
              }
              &:hover::after {
                opacity: 0.3;
              }
            }
            input[type=checkbox] {
              visibility: hidden;
              &:checked + label:after {
                opacity: 1;
              } 
            }   
          }

          .table {
            margin: 0;
          }
          .table td {
            padding: .5rem .75rem;
          }
          button {
            font-family: 'Catamaran', sans-serif;
          }
          .btn-grp-fix {
            position: fixed;
            z-index: 999;
            left: 38%;
          }
          #map {
            height: 100%;
          }
          .btn-close {
            position: fixed;
            z-index: 999;
            top: 110px;
            right: 25px;
          }
        </style>
    </head>
    <body>
      <nav class="navbar navbar-toggleable-md navbar-light fixed-top bg-custom">
        <a class="navbar-brand" href="#">
          <img src="img/logo.png"/>
        </a>
      </nav>

      <div class="container-fluid">
        <div class="row">
          <button type="button" title="Kapat" class="btn btn-primary btn-sm rounded-circle btn-close" onclick="window.location='{{ URL::route('detail') }}'"><img src="/img/cancel.svg" style="width: 14px; height: 21px;"/></button>
          <div class="col-7" style="padding: 0;">
            <img src="http://www.timeturk.com/resim/detay/69/695941.jpg" style="width: 100%;"/>
          </div>

          <div class="col-5" style="padding: 0;">
            <div id="map"></div>
          </div>
        </div>
      </div>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}"></script>

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

          function fileUpload(input) {
              if (input.files && input.files[0]) {
                  var reader = new FileReader(),
                      sId = input.getAttribute("id");

                  reader.onload = function (e) {
                      if (sId === "inputProjeGorsel") {
                          //$("#imgProjeGorsel").attr('src', e.target.result);
                          marker = e.target.result;
                      } else if (sId === "inputProjeKroki") {
                          $("#imgProjeKroki").attr('src', e.target.result);
                      }
                  };

                  reader.readAsDataURL(input.files[0]);
              }
          }
      </script>
    </body>
</html>