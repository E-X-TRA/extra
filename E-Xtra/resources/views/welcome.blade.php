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
            }
            .timmana {
                    font-family: 'Timmana';
                    font-size: 175px;
                    margin-top: 1.1em;
                    color: white
            }
        </style>
    </head>
    <body>
      <div class="parallax"></div>
      <div style="height: 42em;" class="bg-secondary">
        <div class="container-fluid">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <div class="text-center">
                        <h1 class="timmana">Extra</h1>
                        <p class="text-capitalize">dimana kami memmbuat semua hal lebih mudah</p>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('/js/app.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.js') }}"></script>
    </body>
</html>
