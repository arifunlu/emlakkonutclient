<div style="z-index: 99; width: 2rem; margin-right: .1rem;">
    <img src="/img/pay.png" style="margin-top: 3rem; display: none;" role="button" data-toggle="collapse"
         data-target="#rightIcerik" onmouseover="this.style.opacity=.6;" onmouseout="this.style.opacity=1;"/>
    <img src="/img/draw.svg" style="margin-top: 10rem;" onclick="toggleDraw(this);"
         role="button"/>
    <img src="/img/clear.svg" onclick="clear_canvas();" role="button"
         onmouseover="this.style.opacity=.6;" onmouseout="this.style.opacity=1;" style="margin-top: 1rem;"/>
    <img src="/img/zoom_in.svg" onclick="updateZoom(0.2);" role="button"
         onmouseover="this.style.opacity=.6;" onmouseout="this.style.opacity=1;" style="margin-top: 1rem;"/>
    <img src="/img/zoom_fit.svg" onclick="updateZoom(0);" role="button"
         onmouseover="this.style.opacity=.6;" onmouseout="this.style.opacity=1;" style="margin-top: 1rem;"/>
    <img src="/img/zoom_out.svg" onclick="updateZoom(-0.2);" role="button"
         onmouseover="this.style.opacity=.6;" onmouseout="this.style.opacity=1;" style="margin-top: 1rem;"/>
    <img src="/img/map.svg" onclick="window.location='{{ URL::route('map') }}'"
         role="button" onmouseover="this.style.opacity=.6;" onmouseout="this.style.opacity=1;" style="margin-top: 1rem;"/>
</div>