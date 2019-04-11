<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Xtra</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">

        <style>
            .parallax{
                      /* The image used */
                        background-image: url("img/shield.png");

                      /* Set a specific height */
                      min-height: 680px;

                      /* Create the parallax scrolling effect */
                      background-attachment: fixed;
                      background-position: center;
                      background-repeat: no-repeat;
                      background-size: 350px;
                      background-color: #cdedf6
            }
            .timmana {
                    font-family: 'Timmana';
                    font-size: 175px;
                    margin-top: 1.1em;
                    color: #cdedf6;
            }
            .warna{
                background-color: #006496;
            }
        </style>
    </head>
    <body>
      <div class="parallax"></div>

    <div style="height: 42em;" class="warna">
        <div class="container-fluid">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <div class="text-center">
                        <h1 class="timmana">Extra</h1>
                        <h3 class="text-capitalize" style="color: #cdedf6">dimana kami membuat semua hal lebih mudah</h3>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('/js/app.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.js') }}"></script>
    </body>
</html>
