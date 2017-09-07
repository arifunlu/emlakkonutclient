@extends('layouts.app')

@section('css')
  @parent
    <link rel="stylesheet" href="/css/image-map-pro.min.css">
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
        <h5 class="navbar-brand">EMLAK KONUT BAŞAKŞEHİR EVLERİ 1-2</h5>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item" data-toggle="collapse" data-target="#yon">
            <a class="nav-link" href="#">Yön <span class="arrow"></span></a>
          </li>
          <ul class="sub-menu collapse show" id="yon">
            <li class="nav-item">
              <div class="nav-link">
                <input id="checkbox1" type="checkbox">
                <label for="checkbox1">Kuzey</label>
              </div>
            </li>
            <li class="nav-item">
              <div class="nav-link">
                <input id="checkbox2" type="checkbox">
                <label for="checkbox2">Güney</label>
              </div>
            </li>
            <li class="nav-item">
              <div class="nav-link">
                <input id="checkbox3" type="checkbox">
                <label for="checkbox3">Doğu</label>
              </div>
            </li>
            <li class="nav-item">
              <div class="nav-link">
                <input id="checkbox4" type="checkbox">
                <label for="checkbox4">Batı</label>
              </div>
            </li>
          </ul>
        </ul>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item" data-toggle="collapse" data-target="#kat">
            <a class="nav-link" href="#">Kat <span class="arrow"></span></a>
          </li>
          <ul class="sub-menu collapse show" id="kat">
            <li class="nav-item">
              <div class="nav-link">
                <input id="checkbox5" type="checkbox">
                <label for="checkbox5">Zemin</label>
              </div>
            </li>
            <li class="nav-item">
              <div class="nav-link">
                <input id="checkbox6" type="checkbox">
                <label for="checkbox6">Yüksek Giriş</label>
              </div>
            </li>
            <li class="nav-item">
              <div class="nav-link">
                <input id="checkbox7" type="checkbox">
                <label for="checkbox7">1</label>
              </div>
            </li>
            <li class="nav-item">
              <div class="nav-link">
                <input id="checkbox8" type="checkbox">
                <label for="checkbox8">2</label>
              </div>
            </li>
            <li class="nav-item">
              <div class="nav-link">
                <input id="checkbox9" type="checkbox">
                <label for="checkbox9">3</label>
              </div>
            </li>
            <li class="nav-item">
              <div class="nav-link">
                <input id="checkbox10" type="checkbox">
                <label for="checkbox10">4</label>
              </div>
            </li>
            <li class="nav-item">
              <div class="nav-link">
                <input id="checkbox11" type="checkbox">
                <label for="checkbox11">5</label>
              </div>
            </li>
            <li class="nav-item">
              <div class="nav-link">
                <input id="checkbox12" type="checkbox">
                <label for="checkbox12">6</label>
              </div>
            </li>
            <li class="nav-item">
              <div class="nav-link">
                <input id="checkbox13" type="checkbox">
                <label for="checkbox13">7</label>
              </div>
            </li>
            <li class="nav-item">
              <div class="nav-link">
                <input id="checkbox14" type="checkbox">
                <label for="checkbox14">8</label>
              </div>
            </li>
          </ul>
        </ul>
      </nav>

      <main class="col-sm-9 ml-sm-auto col-md-10 p-0">
        <section id="sectionIcerik">
          <div class="btn-group btn-grp-fix" role="group">
            <button id="btnGenelVaziyet" type="button" class="btn btn-success active tableheader" onclick="onClickActiveNav(this)">GENEL VAZİYET PLANI</button>
            <button id="btnParselVaziyet" type="button" class="btn btn-success tableheader" onclick="onClickActiveNav(this)">PARSEL VAZİYET PLANI</button>
            <button id="btnDaire" type="button" class="btn btn-success tableheader" onclick="onClickActiveNav(this)">DAİRE PLANI</button>
          </div>
          <div class="d-flex flex-row justify-content-between">
            <div/>
            <canvas id="jPolygon" onmousedown="point_it(event)" data-imgsrc="http://avrupark.com/images/kat-planlari/2+1-A-BLOK-2.jpg" width="960" height="540"></canvas>
            <div id="image-map-pro-container"></div>
            <div class="d-flex flex-row justify-content-end">
              <div class="d-flex flex-column align-items-center" style="z-index: 99;">
                <img src="/img/pay.png" style="margin-top: 3rem;" role="button" data-toggle="collapse" data-target="#rightIcerik" onmouseover="this.src='/img/pay2.png';" onmouseout="this.src='/img/pay.png';" />
                <img src="/img/point.png" style="margin-top: 3rem;" onclick="toggleDraw(this);" role="button" />
                <img src="/img/clear.png" onclick="clear_canvas();" role="button" onmouseover="this.src='/img/clear2.png';" onmouseout="this.src='/img/clear.png';" />
                <img src="/img/zoom_in.png" onclick="updateZoom(0.2);" role="button" onmouseover="this.src='/img/zoom_in2.png';" onmouseout="this.src='/img/zoom_in.png';" />
                <img src="/img/zoom.png" onclick="updateZoom(0);" role="button" onmouseover="this.src='/img/zoom2.png';" onmouseout="this.src='/img/zoom.png';" />
                <img src="/img/zoom_out.png" onclick="updateZoom(-0.2);" role="button" onmouseover="this.src='/img/zoom_out2.png';" onmouseout="this.src='/img/zoom_out.png';" />
                <img src="/img/map.png" onclick="window.location='{{ URL::route('map') }}'" role="button" onmouseover="this.src='/img/map2.png';" onmouseout="this.src='/img/map.png';" />
              </div>
              <div id="rightIcerik" class="collapse">
                <h5>B TİP BLOK - 3+1 DAİRE</h5>
                <span>Giriş Holü:</span>
                <span>Koridor:</span>
                <span>Salon:</span>
                <span>Mutfak:</span>
                <span>Banyo:</span>
                <span>Ebeveyn Yatak Odası:</span>
                <span>Oda 1:</span>
                <span>Oda 2:</span>
                <span>Ebeveyn Banyosu:</span>
                <span>Kapalı Balkon:</span>
                <hr>
                <span>Net Alan:</span>
                <span>Açık Balkon:</span>
                <hr>
                <span>Balkon Dahil Toplam Net Alan:</span>
                <span>Satışa Esas Brüt Alan:</span>
              </div>
            </div>
          </div>
        </section>

        <div id="plan-table" class="col-sm-9 ml-sm-auto col-md-10 p-0 m-0" role="tablist" aria-multiselectable="true">
          <div class="card">
            <div class="card-header" role="tab" id="headingOne">
              <img id="img-up" src="/img/down.png" class="up" role="button" onclick="upIconChange()" data-toggle="collapse" data-parent="#plan-table" data-target="#collapseOne" />
            </div>
            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
              <div class="card-block">
                <table class="table table-striped">
                  <thead class="tableheader">
                    <tr>
                      <th>BLOK</th>
                      <th>KAPI NO</th>
                      <th>KAT</th>
                      <th>YÖN</th>
                      <th>ODA</th>
                      <th>METREKARE</th>
                      <th>BRÜT FİYAT</th>
                      <th>NET FİYAT</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1,001</td>
                      <td>Lorem</td>
                      <td>ipsum</td>
                      <td>dolor</td>
                      <td>sit</td>
                      <td>ipsum</td>
                      <td>dolor</td>
                      <td>sit</td>
                    </tr>
                    <tr>
                      <td>1,001</td>
                      <td>Lorem</td>
                      <td>ipsum</td>
                      <td>dolor</td>
                      <td>sit</td>
                      <td>ipsum</td>
                      <td>dolor</td>
                      <td>sit</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
@endsection

@section('javascript')
  @parent
    <script src="/js/polygon.js"></script>
    <script src="/js/image-map-pro.min.js"></script>
    <script>
      ;(function ($, window, document, undefined) {
        $(document).ready(function() {
            $('#image-map-pro-container').imageMapPro({"image":{"url":"https://webcraftplugins.com/uploads/image-map-pro/demo.jpg"},"id":811,"editor":{"selected_shape":"poly-974","tool":"poly"},"general":{"name":"Demo"},"spots":[{"id":"spot-8364","title":"spot-8364","x":26,"y":19.8,"mouseover_style":{"icon_fill":"#ffcd00"},"tooltip_style":{"position":"left","auto_width":1},"tooltip_content":{"plain_text":"Mouseover the building below!","squares_settings":{"containers":[{"id":"sq-container-403761","settings":{"elements":[{"settings":{"name":"Paragraph","iconClass":"fa fa-paragraph"}}]}}]}}},{"id":"poly-2893","title":"poly-2893","type":"poly","x":15.757,"y":22.263,"width":22.844,"height":65.977,"default_style":{"fill":"#ffcd00","fill_opacity":0,"icon_svg_path":"","icon_svg_viewbox":"","icon_fill":"#2196f3"},"mouseover_style":{"fill":"#ffcd00","fill_opacity":0.5112781954887218},"tooltip_style":{"position":"right","width":450},"tooltip_content":{"content_type":"content-builder","squares_settings":{"containers":[{"id":"sq-container-770221","settings":{"elements":[{"settings":{"name":"Heading","iconClass":"fa fa-header"},"options":{"heading":{"text":"Content Builder for the Tooltips"},"font":{"font_size":"18","font_weight":"700"}}},{"settings":{"name":"Image","iconClass":"fa fa-camera"},"options":{"layout":{"column_span":{"lg":{"class":"col-lg-6"}}}}},{"settings":{"name":"Paragraph","iconClass":"fa fa-paragraph"},"options":{"text":{"text":"Image Map Pro 3.0 comes with a fully featured content builder that allows you to add rich content to your tooltips. Images, video, buttons, responsive grid system - it has it all!"},"layout":{"column_span":{"lg":{"class":"col-lg-6"}}}}},{"settings":{"name":"Button","iconClass":"fa fa-link"},"options":{"button":{"text":"Example Button!","display":"block"}}}]}}]}},"points":[{"x":2.8712844939993056,"y":100},{"x":3.536549668697936,"y":95.06062700400813},{"x":0.8754889699034004,"y":95.06062700400813},{"x":0,"y":47.12265849973005},{"x":0.7847960076976461,"y":23.53692508155694},{"x":3.9088248123944527,"y":17.15586649440026},{"x":12.222274912965194,"y":15.76484496015944},{"x":15.056281433779493,"y":7.219083609526608},{"x":19.502913861465178,"y":6.533930832820084},{"x":19.502913861465178,"y":4.254220219285366},{"x":26.155565608451525,"y":1.9745096057506475},{"x":33.47348253013651,"y":0.8346542989832882},{"x":38.79560392772559,"y":0.4547025300608352},{"x":44.78299050001331,"y":0},{"x":52.766172596396935,"y":1.8997588446122655},{"x":59.41882434338327,"y":0.7599035378449062},{"x":64.49612815668326,"y":2.2028938646528204},{"x":70.93855610846484,"y":3.267998410281798},{"x":70.30788472285052,"y":9.951430765378646},{"x":85.60898374091914,"y":7.900104410746106},{"x":100,"y":12.231141378913366},{"x":99.33473482530137,"y":71.50361733081603},{"x":94.67787860241093,"y":71.1236655618936},{"x":94.67787860241093,"y":73.02342440650584},{"x":74.71992336145188,"y":73.02342440650584},{"x":74.71992336145188,"y":99.62004823107758}],"vs":[[210.09118541033433,684.7416413373859],[212.03647416413372,659.4528875379939],[204.25531914893617,659.4528875379939],[201.69531914893616,414.0186018237082],[203.99012564995655,293.2636383750531],[213.12503655683665,260.593698339942],[237.43423174842115,253.4719035012826],[245.72109422492397,209.7190516717325],[258.7234042553191,206.21118541033434],[258.7234042553191,194.53945288753798],[278.17629179331306,182.86772036474164],[299.57446808510633,177.03185410334345],[315.1367781155015,175.08656534954406],[332.64437689969606,172.75856534954406],[355.9878419452888,182.48500911854103],[375.44072948328267,176.64914285714283],[390.2871732522796,184.03700911854102],[409.12534954407295,189.49016413373857],[407.2812158054711,223.70820668693008],[452.0228571428571,213.20576291793313],[494.10334346504555,235.37993920972644],[492.15805471124617,538.8449848024316],[478.54103343465044,536.8996960486323],[478.54103343465044,546.6261398176291],[420.18237082066867,546.6261398176291],[420.18237082066867,682.7963525835867]]},{"id":"poly-974","title":"poly-974","type":"poly","x":41.033,"y":2.507,"width":19.909,"height":84.48,"actions":{"mouseover":"no-action"},"default_style":{"fill":"#ffcd00","fill_opacity":0,"icon_svg_path":"","icon_svg_viewbox":"","icon_fill":"#2196f3"},"mouseover_style":{"fill":"#ffcd00","fill_opacity":0.5112781954887218},"tooltip_style":{"auto_width":1},"tooltip_content":{"squares_settings":{"containers":[{"id":"sq-container-403761","settings":{"elements":[{"settings":{"name":"Paragraph","iconClass":"fa fa-paragraph"}}]}}]}},"points":[{"x":3.0534351145038165,"y":91.98813056379822},{"x":0,"y":10.979228486646884},{"x":11.450381679389313,"y":7.71513353115727},{"x":11.450381679389313,"y":6.528189910979229},{"x":3.0534351145038165,"y":3.857566765578635},{"x":29.00763358778626,"y":0},{"x":55.72519083969466,"y":5.934718100890208},{"x":60.30534351145038,"y":5.341246290801187},{"x":72.51908396946564,"y":8.605341246290802},{"x":73.2824427480916,"y":9.792284866468842},{"x":93.12977099236642,"y":14.540059347181009},{"x":93.12977099236642,"y":28.18991097922849},{"x":100,"y":30.267062314540063},{"x":98.47328244274809,"y":100},{"x":58.01526717557252,"y":100},{"x":57.25190839694656,"y":91.3946587537092},{"x":25.190839694656486,"y":91.0979228486647},{"x":25.190839694656486,"y":89.31750741839762},{"x":10.687022900763358,"y":89.02077151335311},{"x":10.687022900763358,"y":90.80118694362018}],"vs":[[533.0091185410333,622.4924012158053],[525.2279635258358,91.4285714285714],[554.4072948328267,70.0303951367781],[554.4072948328267,62.24924012158054],[533.0091185410333,44.741641337386014],[599.1489361702127,19.45288753799392],[667.2340425531914,58.358662613981764],[678.9057750759878,54.46808510638297],[710.030395136778,75.86626139817629],[711.9756838905774,83.64741641337383],[762.5531914893617,114.77203647416411],[762.5531914893617,204.25531914893614],[780.0607902735562,217.8723404255319],[776.1702127659574,675.0151975683889],[673.0699088145896,675.0151975683889],[671.1246200607902,618.6018237082064],[589.4224924012158,616.6565349544071],[589.4224924012158,604.9848024316108],[552.4620060790272,603.0395136778113],[552.4620060790272,614.7112462006078]]},{"id":"poly-225","title":"poly-225","type":"poly","x":64.742,"y":16.044,"width":18.845,"height":71.444,"actions":{"mouseover":"no-action"},"default_style":{"fill":"#ffcd00","fill_opacity":0,"icon_svg_path":"","icon_svg_viewbox":"","icon_fill":"#2196f3"},"mouseover_style":{"fill":"#ffcd00","fill_opacity":0.5112781954887218},"tooltip_style":{"auto_width":1},"tooltip_content":{"squares_settings":{"containers":[{"id":"sq-container-403761","settings":{"elements":[{"settings":{"name":"Paragraph","iconClass":"fa fa-paragraph"}}]}}]}},"points":[{"x":1.6129032258064515,"y":92.28070175438596},{"x":0,"y":25.6140350877193},{"x":2.4193548387096775,"y":25.6140350877193},{"x":2.4193548387096775,"y":12.982456140350877},{"x":15.32258064516129,"y":11.578947368421053},{"x":15.32258064516129,"y":5.964912280701754},{"x":31.451612903225808,"y":4.912280701754386},{"x":30.64516129032258,"y":2.807017543859649},{"x":54.03225806451613,"y":1.7543859649122806},{"x":54.83870967741935,"y":3.1578947368421053},{"x":77.41935483870968,"y":0},{"x":91.12903225806451,"y":5.614035087719298},{"x":91.93548387096774,"y":21.75438596491228},{"x":98.38709677419355,"y":25.6140350877193},{"x":100,"y":81.05263157894737},{"x":98.38709677419355,"y":89.47368421052632},{"x":86.29032258064517,"y":89.47368421052632},{"x":85.48387096774194,"y":99.64912280701755},{"x":3.225806451612903,"y":100}],"vs":[[832.5835866261398,636.1094224924011],[828.693009118541,266.5045592705167],[834.5288753799392,266.5045592705167],[834.5288753799392,196.47416413373858],[865.6534954407294,188.69300911854103],[865.6534954407294,157.56838905775075],[904.5592705167173,151.73252279635258],[902.6139817629179,140.06079027355622],[959.0273556231002,134.22492401215806],[960.9726443768997,142.0060790273556],[1015.4407294832827,124.4984802431611],[1048.5106382978722,155.62310030395136],[1050.4559270516718,245.1063829787234],[1066.018237082067,266.5045592705167],[1069.9088145896656,573.8601823708206],[1066.018237082067,620.547112462006],[1036.838905775076,620.547112462006],[1034.8936170212764,676.9604863221883],[836.4741641337386,678.9057750759878]]},{"id":"poly-1879","title":"poly-1879","type":"poly","x":88.146,"y":53.144,"width":11.854,"height":35.095,"actions":{"mouseover":"no-action"},"default_style":{"fill":"#ffcd00","fill_opacity":0,"icon_svg_path":"","icon_svg_viewbox":"","icon_fill":"#2196f3"},"mouseover_style":{"fill":"#ffcd00","fill_opacity":0.5112781954887218},"tooltip_style":{"auto_width":1},"tooltip_content":{"squares_settings":{"containers":[{"id":"sq-container-403761","settings":{"elements":[{"settings":{"name":"Paragraph","iconClass":"fa fa-paragraph"}}]}}]}},"points":[{"x":5.128205128205128,"y":99.28571428571429},{"x":3.8461538461538463,"y":19.28571428571429},{"x":0,"y":13.571428571428571},{"x":8.974358974358974,"y":13.571428571428571},{"x":10.256410256410255,"y":10},{"x":14.102564102564102,"y":9.285714285714286},{"x":15.384615384615385,"y":5.714285714285714},{"x":98.71794871794873,"y":0},{"x":100,"y":100}],"vs":[[1136.0486322188447,682.7963525835867],[1134.1033434650453,464.9240121580547],[1128.267477203647,449.36170212765956],[1141.8844984802429,449.36170212765956],[1143.8297872340422,439.6352583586626],[1149.6656534954404,437.6899696048632],[1151.6109422492398,427.9635258358662],[1278.0547112462002,412.4012158054711],[1279.9999999999995,684.741641337386]]},{"id":"poly-5080","title":"poly-5080","type":"poly","x":3.191,"y":57.155,"width":12.614,"height":31.085,"actions":{"mouseover":"no-action"},"default_style":{"fill":"#ffcd00","fill_opacity":0,"icon_svg_path":"","icon_svg_viewbox":"","icon_fill":"#2196f3"},"mouseover_style":{"fill":"#ffcd00","fill_opacity":0.5112781954887218},"tooltip_style":{"auto_width":1},"tooltip_content":{"squares_settings":{"containers":[{"id":"sq-container-403761","settings":{"elements":[{"settings":{"name":"Paragraph","iconClass":"fa fa-paragraph"}}]}}]}},"points":[{"x":1.2048192771084338,"y":100},{"x":0,"y":92.74193548387096},{"x":13.253012048192772,"y":90.32258064516128},{"x":14.457831325301203,"y":87.09677419354838},{"x":28.915662650602407,"y":87.09677419354838},{"x":32.53012048192771,"y":50},{"x":38.55421686746988,"y":41.12903225806452},{"x":45.78313253012048,"y":41.12903225806452},{"x":44.57831325301205,"y":20.967741935483872},{"x":66.26506024096386,"y":15.32258064516129},{"x":67.46987951807229,"y":2.4193548387096775},{"x":83.13253012048193,"y":0},{"x":98.79518072289156,"y":4.838709677419355},{"x":100,"y":99.19354838709677}],"vs":[[42.796352583586625,684.741641337386],[40.85106382978723,667.2340425531914],[62.24924012158054,661.3981762917932],[64.19452887537993,653.6170212765958],[87.53799392097264,653.6170212765958],[93.37386018237082,564.1337386018237],[103.10030395136778,542.7355623100304],[114.77203647416414,542.7355623100304],[112.82674772036475,494.10334346504555],[147.8419452887538,480.48632218844983],[149.7872340425532,449.36170212765956],[175.07598784194528,443.5258358662614],[200.3647416413374,455.1975683890577],[202.31003039513678,682.7963525835866]]},{"id":"poly-3579","title":"poly-3579","type":"poly","x":33.587,"y":69.94,"width":7.599,"height":18.55,"actions":{"mouseover":"no-action"},"default_style":{"fill":"#ffcd00","fill_opacity":0,"icon_svg_path":"","icon_svg_viewbox":"","icon_fill":"#2196f3"},"mouseover_style":{"fill":"#ffcd00","fill_opacity":0.5112781954887218},"tooltip_style":{"auto_width":1},"tooltip_content":{"squares_settings":{"containers":[{"id":"sq-container-403761","settings":{"elements":[{"settings":{"name":"Paragraph","iconClass":"fa fa-paragraph"}}]}}]}},"points":[{"x":100,"y":0},{"x":0,"y":9.45945945945946},{"x":4,"y":97.2972972972973},{"x":84,"y":100},{"x":80,"y":56.75675675675676},{"x":100,"y":52.702702702702695}],"vs":[[527.1732522796352,542.7355623100303],[429.9088145896656,556.3525835866261],[433.7993920972644,682.7963525835866],[511.61094224924005,686.6869300911853],[507.7203647416413,624.4376899696048],[527.1732522796352,618.6018237082067]]},{"id":"poly-919","title":"poly-919","type":"poly","x":39.666,"y":77.711,"width":12.918,"height":10.278,"actions":{"mouseover":"no-action"},"default_style":{"fill":"#ffcd00","fill_opacity":0,"icon_svg_path":"","icon_svg_viewbox":"","icon_fill":"#2196f3"},"mouseover_style":{"fill":"#ffcd00","fill_opacity":0.5112781954887218},"tooltip_style":{"auto_width":1},"tooltip_content":{"squares_settings":{"containers":[{"id":"sq-container-403761","settings":{"elements":[{"settings":{"name":"Paragraph","iconClass":"fa fa-paragraph"}}]}}]}},"points":[{"x":96.47058823529412,"y":100},{"x":100,"y":26.82926829268293},{"x":50.588235294117645,"y":17.073170731707318},{"x":50.588235294117645,"y":12.195121951219512},{"x":44.70588235294118,"y":0},{"x":28.235294117647058,"y":0},{"x":27.058823529411764,"y":14.634146341463413},{"x":0,"y":24.390243902439025},{"x":1.1764705882352942,"y":97.5609756097561}],"vs":[[667.2340425531916,682.7963525835866],[673.0699088145897,624.4376899696048],[591.3677811550152,616.6565349544072],[591.3677811550152,612.7659574468084],[581.6413373860182,603.0395136778114],[554.4072948328268,603.0395136778114],[552.4620060790273,614.7112462006078],[507.72036474164133,622.4924012158053],[509.6656534954407,680.8510638297871]]},{"id":"poly-9983","title":"poly-9983","type":"poly","x":60.334,"y":73.951,"width":4.863,"height":14.038,"actions":{"mouseover":"no-action"},"default_style":{"fill":"#ffcd00","fill_opacity":0,"icon_svg_path":"","icon_svg_viewbox":"","icon_fill":"#2196f3"},"mouseover_style":{"fill":"#ffcd00","fill_opacity":0.5112781954887218},"tooltip_style":{"auto_width":1},"tooltip_content":{"squares_settings":{"containers":[{"id":"sq-container-403761","settings":{"elements":[{"settings":{"name":"Paragraph","iconClass":"fa fa-paragraph"}}]}}]}},"points":[{"x":15.625,"y":0},{"x":84.375,"y":0},{"x":96.875,"y":10.714285714285714},{"x":100,"y":96.42857142857143},{"x":0,"y":100},{"x":0,"y":16.071428571428573}],"vs":[[782.0060790273557,573.8601823708207],[824.8024316109422,573.8601823708207],[832.5835866261398,585.531914893617],[834.5288753799392,678.9057750759879],[772.2796352583587,682.7963525835867],[772.2796352583587,591.3677811550152]]},{"id":"poly-9416","title":"poly-9416","type":"poly","x":80.699,"y":74.202,"width":8.055,"height":13.787,"actions":{"mouseover":"no-action"},"default_style":{"fill":"#ffcd00","fill_opacity":0,"icon_svg_path":"","icon_svg_viewbox":"","icon_fill":"#2196f3"},"mouseover_style":{"fill":"#ffcd00","fill_opacity":0.5112781954887218},"tooltip_style":{"auto_width":1},"tooltip_content":{"squares_settings":{"containers":[{"id":"sq-container-403761","settings":{"elements":[{"settings":{"name":"Paragraph","iconClass":"fa fa-paragraph"}}]}}]}},"points":[{"x":0,"y":98.18181818181819},{"x":0,"y":47.27272727272727},{"x":30.188679245282955,"y":41.81818181818181},{"x":33.962264150943305,"y":0.029659090909091627},{"x":84.90566037735844,"y":0},{"x":98.11320754716974,"y":10.909090909090908},{"x":100,"y":100}],"vs":[[1032.9483282674773,680.8510638297872],[1032.9483282674773,626.3829787234042],[1064.0729483282676,620.547112462006],[1067.9635258358662,575.8372036474163],[1120.48632218845,575.80547112462],[1134.1033434650458,587.4772036474163],[1136.0486322188451,682.7963525835866]]}]});

            $("#image-map-pro-container").panzoom();
            $("#jPolygon").panzoom();
            clear_canvas();
        });
      })(jQuery, window, document);

      function onClickActiveNav(p) {
        var id = p.getAttribute('id');
        $('.btn-grp-fix button.active').removeClass('active');
        $('#' + id).addClass('active');

        if (id === "btnDaire") {
          $("#image-map-pro-container").css({visibility: 'hidden'});
          $("#jPolygon").css({visibility: 'visible'});
        } else {
          $("#image-map-pro-container").css({visibility: 'visible'});
          $("#jPolygon").css({visibility: 'hidden'});
        }
      }

      var zoomLevel = 1,
          zoomFactor = 100;
      function updateZoom(zoom) {
        if (zoom === 0) {
          zoomLevel = 1;
        } else if (zoomLevel < 1.9999999999999999) {
          if ((zoomLevel !== 1.9999999999999998 || (zoomLevel === 1.9999999999999998 && zoom === -0.2)) &&
              (zoomLevel !== 0.4000000000000001 || (zoomLevel === 0.4000000000000001 && zoom === 0.2))) {
            zoomLevel += zoom;
          }
        }

        switch(Math.round(zoomLevel * 100) / 100) {
            case 0.4:
                zoomFactor = 250;
                break;
            case 0.6:
                zoomFactor = 170;
                break;
            case 0.8:
                zoomFactor = 125;
                break;
            case 1.2:
                zoomFactor = 85;
                break;
            case 1.4:
                zoomFactor = 72;
                break;
            case 1.6:
                zoomFactor = 63;
                break;
            case 1.8:
                zoomFactor = 56;
                break;
            case 2:
                zoomFactor = 50;
                break;
            default:
                zoomFactor = 100;
        }

        $('#image-map-pro-container').css({ transform: 'scale(' + zoomLevel + ')', '-moz-transform': 'scale(' + zoomLevel + ')' });
        $('#jPolygon').css({ transform: 'scale(' + zoomLevel + ')', '-moz-transform': 'scale(' + zoomLevel + ')' });
      }

      function upIconChange() {
        if ($("#img-up").attr("src").indexOf("up") > -1 ) {
          $("#img-up").attr("src", "/img/down.png");
        } else {
          $("#img-up").attr("src", "/img/up.png");
        }
      }

      var toggle = true;
      function toggleDraw(p) {
        $("#jPolygon").panzoom("destroy");

        if (toggle) {
          $("#jPolygon").panzoom({panOnlyWhenZoomed: true, minScale: 1});
          p.src = "/img/point2.png";
          toggle = false;
          displayMode = false;
        } else {
          $("#jPolygon").panzoom();
          p.src = "/img/point.png";
          toggle = true;
          displayMode = true;
        }
      }

    </script>
@endsection