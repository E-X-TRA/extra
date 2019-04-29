<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Xtra</title>

        <link rel="icon" href="{{ asset('img/logo.png') }}" >

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Timmana" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400i,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Timmana" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">

        {{-- CSS --}}
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

<style>
    .fugaz{
        font-family: 'Fugaz One', cursive;
        color: white;
        font-size: 25px;
    }
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
        background-image: url(img/logo.png);
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
    <div style="height: 55em;" class="warna">
        <div class="container-fluid">
            <div class="row">
                <div class="col"></div>
                <div class="col-6">
                    <div class="text-center">
                        <h1 class="timmana">E-[X]tra</h1>
                        @guest
                                <a class="btn btn-lg btn-primary float-left" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                    <a class="btn btn-lg btn-primary float-right" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                                    <a class="btn btn-lg btn-primary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        @endguest
                    </div>
                </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col-12">
                <h4 class="text-capitalize fugaz text-center" style="color: white; margin-top: 50px;">"dimana kami membuat semua hal lebih mudah"</h4>
            </div>
        </div>
    </div>
     <div class="container-fluid">
        <div class="row" style="margin-top: 120px; margin-bottom: 11em;">
            <div class="col">
            <a href="{{ url('absensi') }}" style="color: white;">
                    <div class="container-gmb hover-blur">
                        <img class="image" src={{ asset('img/check-square.png') }} alt="">
                        <div class="overlay">
                            <div class="text" style="left:10px;">
                                <label>Absensi</label>
                            </div>
                        </div>
                    </div>
            </div>
            </a>

            <div class="col">
                <a href="{{ url('anggota') }}" style="color: white;">
                    <div class="container-gmb hover-blur">
                            <img class="image" src="{{ asset('img/note.png') }}" alt="">
                            <div class="overlay">
                                <div class="text">
                                    <label>Anggota</label>
                                </div>
                            </div>
                    </div>
                </a>
            </div>
            <div class="col">
            <a href="{{ url('uangKas') }}" style="color: white;">
                    <div class="container-gmb hover-blur">
                        <img class="image" src="{{ asset('img/money.png') }}" alt="">
                        <div class="overlay">
                            <div class="text">
                                <label>UangKas</label>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid " style="height: 20em; background-color: black ;color:white; margin-top: 1px ;">
        <div class="row">
            <div class="col text-center">
                <h4>Dibuat Oleh Siswa SMKN 4 Bandung</h4>
            </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col">
                <h4 class="text-center">powered by</h4>
                <img src="{{ asset('img/smkn4-2.png') }}" alt="Logo Smkn 4" width="200px;" class="mx-auto d-block " style="margin-top: 20px">
            </div>
            <div class="col-2" style="margin-top: 100px; margin-left: 200px;margin-right: 200px;">
                <h6>Copyright 2019 @ E-[X]tra </h6>
            </div>
            <div class="col" style="">
                <h4>About us</h4>
                <p>Alvaro Dwi - Back End</p>
                <p>M Haikal - Front End</p>
                <p>Raihan Putra - Front End</p>
                <p>Telp/Fax : (022) - 7303736</p>
            </div>
        </div>
    </div>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script src="{{ asset('/js/jquery.slim.min.js') }}"></script>
        <script src="{{ asset('/js/popper.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js')}}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
