<div class="d-flex flex-column align-items-center" style="z-index: 99;">
    <img src="/img/pay.png" style="margin-top: 3rem; display: none;" role="button" data-toggle="collapse"
         data-target="#rightIcerik" onmouseover="this.style.opacity=.6;" onmouseout="this.style.opacity=1;"/>
    <img src="/img/point.png" style="margin-top: 10rem;" onclick="toggleDraw(this);"
         role="button"/>
    <img src="/img/clear.png" onclick="clear_canvas();" role="button"
         onmouseover="this.style.opacity=.6;" onmouseout="this.style.opacity=1;"/>
    <img src="/img/zoom_in.png" onclick="updateZoom(0.2);" role="button"
         onmouseover="this.style.opacity=.6;" onmouseout="this.style.opacity=1;"/>
    <img src="/img/zoom.png" onclick="updateZoom(0);" role="button"
         onmouseover="this.style.opacity=.6;" onmouseout="this.style.opacity=1;"/>
    <img src="/img/zoom_out.png" onclick="updateZoom(-0.2);" role="button"
         onmouseover="this.style.opacity=.6;" onmouseout="this.style.opacity=1;"/>
    <img src="/img/map.png" onclick="window.location='{{ URL::route('map') }}'"
         role="button" onmouseover="this.style.opacity=.6;" onmouseout="this.style.opacity=1;"/>
</div>