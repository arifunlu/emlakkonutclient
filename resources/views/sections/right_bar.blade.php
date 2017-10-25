<div class="d-flex flex-column align-items-center" style="z-index: 99;">
    <img src="/img/pay.png" style="margin-top: 3rem; display: none;" role="button" data-toggle="collapse"
         data-target="#rightIcerik" onmouseover="this.src='/img/pay2.png';"
         onmouseout="this.src='/img/pay.png';"/>
    <img src="/img/point.png" style="margin-top: 10rem;" onclick="toggleDraw(this);"
         role="button"/>
    <img src="/img/clear.png" onclick="clear_canvas();" role="button"
         onmouseover="this.src='/img/clear2.png';" onmouseout="this.src='/img/clear.png';"/>
    <img src="/img/zoom_in.png" onclick="updateZoom(0.2);" role="button"
         onmouseover="this.src='/img/zoom_in2.png';"
         onmouseout="this.src='/img/zoom_in.png';"/>
    <img src="/img/zoom.png" onclick="updateZoom(0);" role="button"
         onmouseover="this.src='/img/zoom2.png';" onmouseout="this.src='/img/zoom.png';"/>
    <img src="/img/zoom_out.png" onclick="updateZoom(-0.2);" role="button"
         onmouseover="this.src='/img/zoom_out2.png';"
         onmouseout="this.src='/img/zoom_out.png';"/>
    <img src="/img/map.png" onclick="window.location='{{ URL::route('map') }}'"
         role="button" onmouseover="this.style.opacity=.6;this.filters.alpha.opacity=60"
         onmouseout="this.style.opacity=.6;this.filters.alpha.opacity=60"/>
</div>