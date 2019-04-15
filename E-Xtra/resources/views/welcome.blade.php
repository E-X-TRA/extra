<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Xtra</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Timmana" rel="stylesheet">

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
</style>
    </head>
    <body>
    <div class="parallax"></div>
    <div style="height: 42em;" class="warna">
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
        <div class="row" style="margin-top: 100px">
            <div class="col">
                    <div class="container-gmb hover-blur">
                        <img class="image" src="img/check-square.png" alt="">
                        <div class="overlay">
                            <div class="text" style="left:10px;">Absensi</div>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="container-gmb hover-blur">
                        <img class="image" src="img/note.png" alt="">
                        <div class="overlay">
                            <div class="text">Anggota</div>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="container-gmb hover-blur">
                        <img class="image" src="img/money.png" alt="">
                        <div class="overlay">
                            <div class="text">Uang Kas</div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="margin-top: 8em;background-color: #042a2b;">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <h1 class="timmana">Our Team</h1>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width:200px">
                            <img class="card-img-top" src="img/alvaro.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                              <h3 class="card-title">Back-end</h3>
                              <img src="img/back-end.png" alt="Front End image"  class="card-title float-right" width="50px">
                              <h5 class="card-title">Alvaro Dwi </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width:300px">
                            <img class="card-img-top" src="img/haikal.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                              <h3 class="card-title">Front-end</h3>
                              <img src="img/front-end.png" alt="Front End image"  class="card-title float-right" width="50px">
                              <h5 class="card-title">M. Haikal  </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width:300px">
                            <img class="card-img-top" src="img/raihan.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                              <h3 class="card-title">Front-end</h3>
                              <img src="img/front-end.png" alt="Front End image"  class="card-title float-right" width="50px">

                              <h5 class="card-title">Raihan Putra </h5>
                            </div>
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
        <script src="{{ asset('/js/bootstrap.min.js')}}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
