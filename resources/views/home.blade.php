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
                padding-top: 150px;
                background: url('img/bg.png') no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            #accordion {
                transform: translateX(-70%) rotate(-90deg);
                max-width: 25rem;
                transform-origin: right top;
            }
            #accordion .card .collapse {
                transform: rotate(90deg);
            }
            #accordion .card .collapse>img {
                width: 25rem;
                height: 25rem;
            }
            .search {
                width: 12rem;
                border-color: #fff;
                border-radius: 1.25rem;
                margin: 0 auto;
                margin-bottom: 4rem;
                background-color: transparent;
            }
            .search:focus {
                border-color: #fff;
                background-color: transparent;
            }
            .card-space {
                border-bottom: 0;
                border-radius: 0;
                margin-bottom: .5rem;
            }
* {
  box-sizing: border-box;
}

ul {
  display: flex;
  height: 450px;
  padding: 0;
  overflow-x: auto;
  overflow-y: hidden;
  list-style-type: none;
}

li {
  flex: 1;
  display: flex;
  align-items: stretch;
  background: #EFEDED;
  cursor: pointer;
  transition: all .5s ease;
  margin-right: 10px;
  width: 45px;
}

li.active {
  flex: 5;
  background: #fff;
  cursor: default;
  width: 400px;
}
li.active .section-content {
  flex: 4;
  opacity: 1;
  transform: scaleX(1);
}
li .section-title {
  flex: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  background-color: #EFEDED;
}
li .section-title h5 {
  margin: 0;
  transform: rotate(-90deg);
  white-space: nowrap;
}
li .section-content {
  flex: 1;
  display: flex;
  align-items: center;
  opacity: 0;
  transition: all .25s .1s ease-out;
}
        </style>
    </head>
    <body>
        <div class="container">
            <input type="text" class="form-control search" placeholder="Ara..." />
            <ul>
                <li>
                    <div class="section-title">
                    <h5>Section 1</h5>
                    </div>
                    <div class="section-content">
                    <img src="img/9.png" />
                    </div>
                </li>
                <li class="active">
                    <div class="section-title">
                    <h5>Section 2</h5>
                    </div>
                    <div class="section-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora totam delectus, eius nostrum aspernatur voluptas enim fugit ipsa magni voluptatem, odio sit accusamus vel id, commodi consequuntur possimus repellat necessitatibus!</p>
                    </div>
                </li>
                <li>
                    <div class="section-title">
                    <h5>Section 3</h5>
                    </div>
                    <div class="section-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur saepe vel facilis quae nihil ad aspernatur ex delectus. Tenetur nulla voluptates similique quos, quia possimus, magnam esse natus quis ipsa.</p>
                    </div>
                </li>
                <li>
                    <div class="section-title">
                    <h5>Section 4</h5>
                    </div>
                    <div class="section-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, optio illo, delectus deleniti animi accusamus. Laboriosam maiores totam provident aliquam. Unde, incidunt amet officia a obcaecati, ducimus at molestiae nemo.</p>
                    </div>    
                </li>
                <li>
                    <div class="section-title">
                    <h5>Section 5</h5>
                    </div>
                    <div class="section-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, optio illo, delectus deleniti animi accusamus. Laboriosam maiores totam provident aliquam. Unde, incidunt amet officia a obcaecati, ducimus at molestiae nemo.</p>
                    </div>    
                </li>
                <li>
                    <div class="section-title">
                    <h5>Section 6</h5>
                    </div>
                    <div class="section-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, optio illo, delectus deleniti animi accusamus. Laboriosam maiores totam provident aliquam. Unde, incidunt amet officia a obcaecati, ducimus at molestiae nemo.</p>
                    </div>    
                </li>
                <li>
                    <div class="section-title">
                    <h5>Section 7</h5>
                    </div>
                    <div class="section-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, optio illo, delectus deleniti animi accusamus. Laboriosam maiores totam provident aliquam. Unde, incidunt amet officia a obcaecati, ducimus at molestiae nemo.</p>
                    </div>    
                </li>
                <li>
                    <div class="section-title">
                    <h5>Section 8</h5>
                    </div>
                    <div class="section-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, optio illo, delectus deleniti animi accusamus. Laboriosam maiores totam provident aliquam. Unde, incidunt amet officia a obcaecati, ducimus at molestiae nemo.</p>
                    </div>    
                </li>
                <li>
                    <div class="section-title">
                    <h5>Section 9</h5>
                    </div>
                    <div class="section-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, optio illo, delectus deleniti animi accusamus. Laboriosam maiores totam provident aliquam. Unde, incidunt amet officia a obcaecati, ducimus at molestiae nemo.</p>
                    </div>    
                </li>
                <li>
                    <div class="section-title">
                    <h5>Section 10</h5>
                    </div>
                    <div class="section-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, optio illo, delectus deleniti animi accusamus. Laboriosam maiores totam provident aliquam. Unde, incidunt amet officia a obcaecati, ducimus at molestiae nemo.</p>
                    </div>
                </li>
            </ul>
            {{--  <div id="accordion" role="tablist" aria-multiselectable="false">
                <div class="card card-space">
                    <div class="card-header" role="tab" id="headingOne">
                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            BATI ŞEHİR
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                        <img src="img/9.png" />
                    </div>
                </div>
                <div class="card card-space">
                    <div class="card-header" role="tab" id="headingTwo">
                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            VARYAP MERIDIAN
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <img src="img/9.png" />
                    </div>
                </div>
                <div class="card card-space">
                    <div class="card-header" role="tab" id="headingThree">
                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            MY WORLD ATAŞEHİR
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                        <img src="img/9.png" />
                    </div>
                </div>
                <div class="card card-space">
                    <div class="card-header" role="tab" id="headingOne">
                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            BATI ŞEHİR
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                        <img src="img/9.png" />
                    </div>
                </div>
                <div class="card card-space">
                    <div class="card-header" role="tab" id="headingTwo">
                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            VARYAP MERIDIAN
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <img src="img/9.png" />
                    </div>
                </div>
                <div class="card card-space">
                    <div class="card-header" role="tab" id="headingThree">
                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            MY WORLD ATAŞEHİR
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                        <img src="img/9.png" />
                    </div>
                </div>
                <div class="card card-space">
                    <div class="card-header" role="tab" id="headingOne">
                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            BATI ŞEHİR
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                        <img src="img/9.png" />
                    </div>
                </div>
                <div class="card card-space">
                    <div class="card-header" role="tab" id="headingTwo">
                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            VARYAP MERIDIAN
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <img src="img/9.png" />
                    </div>
                </div>
                <div class="card card-space">
                    <div class="card-header" role="tab" id="headingThree">
                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            MY WORLD ATAŞEHİR
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                        <img src="img/9.png" />
                    </div>
                </div>
                <div class="card card-space">
                    <div class="card-header" role="tab" id="headingOne">
                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            BATI ŞEHİR
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                        <img src="img/9.png" />
                    </div>
                </div>
                <div class="card card-space">
                    <div class="card-header" role="tab" id="headingTwo">
                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            VARYAP MERIDIAN
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <img src="img/9.png" />
                    </div>
                </div>
                <div class="card card-space">
                    <div class="card-header" role="tab" id="headingThree">
                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            MY WORLD ATAŞEHİR
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                        <img src="img/9.png" />
                    </div>
                </div>
                <div class="card card-space">
                    <div class="card-header" role="tab" id="headingThree">
                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            MY WORLD ATAŞEHİR
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                        <img src="img/9.png" />
                    </div>
                </div>
            </div>  --}}
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            var section = $('li');

            function toggleAccordion() {
                section.removeClass('active');
                $(this).addClass('active');
            }

            section.on('click', toggleAccordion);

            function scrollNext() {
                var elmnt = document.getElementById("content");
                elmnt.scrollIntoView();
            }
        </script>
    </body>
</html>