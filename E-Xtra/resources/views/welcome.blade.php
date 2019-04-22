<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Xtra</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Timmana" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400i,700i" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Timmana" rel="stylesheet">
<style>
    .timmana {
        font-family: 'Timmana';
        font-size: 175px;
        margin-top: 100px;
        color: white;
    }
    .ibm{
        font-family: 'IBM Plex Sans', sans-serif;
        font-size: 120px;
        margin-top: 10px;
        color: white;
    }
    .parallax{
        /* The image used */
        background-image: url({{ asset('img/logo.png') }});
        /* Set a specific height */
        min-height: 680px;
        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: 250px;
        background-color: #007bff;
}

        </style>
    </head>
    <body>
    <div class="parallax"></div>
    <div style="height: 45em;" class="warna">
        <div class="container-fluid">
            <div class="row">
                <div class="col"></div>
                <div class="col-6">
                    <div class="text-center">
                        <h1 class="timmana">E-[X]tra</h1>
                        <h4 class="text-capitalize" style="color: white; margin-bottom: px;">dimana kami membuat semua hal lebih mudah</h4>
                    </div>
                </div>
            <div class="col"></div>
        </div>
    </div>
     <div class="container-fluid">
        <div class="row" style="margin-top: 100px; margin-bottom: 11em;">
            <div class="col">
                    <div class="container-gmb hover-blur">
                        <img class="image" src={{ asset('img/check-square.png') }} alt="">
                        <div class="overlay">
                            <div class="text" style="left:10px;">Absensi</div>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="container-gmb hover-blur">
                        <img class="image" src="{{ asset('img/note.png') }}" alt="">
                        <div class="overlay">
                            <div class="text">Anggota</div>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="container-gmb hover-blur">
                        <img class="image" src="{{ asset('img/money.png') }}" alt="">
                        <div class="overlay">
                            <div class="text">Uang Kas</div>
                        </div>
                    </div>
            </div>
        </div>
    </div>





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('/js/app.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js')}}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
