<div class="d-flex flex-column align-items-center" style="z-index: 99;">
    <img src="/img/pay.png" style="margin-top: 3rem; display: none;" role="button" data-toggle="collapse"
         data-target="#rightIcerik" onmouseover="this.style.opacity=.6;" onmouseout="this.style.opacity=1;"/>
    <img src="/img/point.png" style="margin-top: 10rem;" onclick="toggleDraw(this);"
         role="button"/>
    <img src="/img/clear.png" onclick="clear_canvas();" role="button"
         onmouseover="this.style.opacity=.6;" onmouseout="this.style.opacity=1;"/>
    <img src="/img/zoom_in.svg" onclick="updateZoom(0.2);" role="button"
         onmouseover="this.style.opacity=.6;" onmouseout="this.style.opacity=1;"/>
    <img src="/img/zoom_fit.svg" onclick="updateZoom(0);" role="button"
         onmouseover="this.style.opacity=.6;" onmouseout="this.style.opacity=1;"/>
    <img src="/img/zoom_out.svg" onclick="updateZoom(-0.2);" role="button"
         onmouseover="this.style.opacity=.6;" onmouseout="this.style.opacity=1;"/>
    <img src="/img/map.svg" onclick="window.location='{{ URL::route('map') }}'"
         role="button" onmouseover="this.style.opacity=.6;" onmouseout="this.style.opacity=1;"/>
</div>