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
                border-radius: 1.25rem;
                margin: 0 auto;
                margin-bottom: 4rem;
            }
            .card-space {
                border-bottom: 0;
                border-radius: 0;
                margin-bottom: .5rem;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <input type="text" class="form-control search" placeholder="Ara..." />
            <div id="accordion" role="tablist" aria-multiselectable="false">
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
            </div>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>