<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Xtra | Manajemen Ekskul</title>

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
        font-size: 80px;
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
        background-image: url(img/Title.png);
        /* Set a specific height */
        min-height: 680px;
        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: 50%;
        background-color: #007bff;
}
    .title{
        background-image: url(img/Title.png);
        background-position: center;
        background-size: 50%;
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
                    <div class="text-center" style="cursor: default">
                        <h4 class="text-capitalize timmana text-center" style="color: white; margin-top: 50px;">Manajemen Ekskul Menjadi Mudah</h4>                    </div>
                    <div class="col-xl">
                         @guest
                                <a class="btn btn-lg btn-primary float-left" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                    <a class="btn btn-lg btn-primary float-right" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                            @else
                            <h6 class="text-capitalize timmana text-center" style="color: white; margin-top: 50px; font-size: 30px;" id="target"></h6>
                                    <a class=" btn btn-lg btn-primary" href="{{ route('logout') }}" style="margin-left: 250px;"
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
                {{-- <h4 class="text-capitalize fugaz text-center" style="color: white; margin-top: 50px;">"Manajemen Ekskul Menjadi Mudah"</h4> --}}
            </div>
        </div>
    </div>
     <div class="container-fluid">
        <div class="row" style="margin-top: 120px; margin-bottom: 7em;">
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
    <div class="container-fluid " style="height: 22em; background-color: black ;color:white;">
        <div class="row">
            <div class="col text-center mt-2">
                <h4>Dibuat Oleh Siswa SMKN 4 Bandung</h4>
            </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col">
                <h4 class="text-center">Supported By</h4>
                <img src="{{ asset('img/smkn4-2.png') }}" alt="Logo Smkn 4" width="200px;" class="mx-auto d-block " style="margin-top: 20px">
            </div>
            <div class="col text-center" style="margin-left: 100px;margin-right:100px;">
                <h3>About Us</h3><br>
                <p>Alvaro Dwi - Back End</p>
                <p>M Haikal - Front End</p>
                <p>Raihan Putra - Front End</p>
            </div>
            <div class="col">
                <h4 class="text-center">Powered by</h4>
                <img src="{{ asset('img/logo-rpl1(2).png') }}" alt="Logo Smkn 4" width="350px;" class="" style="margin-top: 55px;">
            </div>
        </div>
        <div class="row">
            <div class="col text-center ">
                <h6>Copyright 2019 @ E-[X]tra </h6>
            </div>
        </div>
    </div>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script src="{{ asset('/js/jquery.slim.min.js') }}"></script>
        <script src="{{ asset('/js/popper.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js')}}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@auth
        <script>
            var today = new Date()
            var curHr = today.getHours()
            var kata

            if (curHr < 12) {
              kata= "Selamat Pagi,Anda Masuk Sebagai {{ Auth::user()->name }}";
            } else if (curHr < 18) {
                kata= "Selamat Siang, Anda Masuk Sebagai {{ Auth::user()->name }} ";
            } else {
                kata= "Selamat Malam, Anda Masuk Sebagai {{ Auth::user()->name }}";
            }
            document.getElementById("target").innerHTML=kata;
@endauth
        </script>
    </body>
</html>
