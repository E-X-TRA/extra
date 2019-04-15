<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Xtra</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <style>
            .container-gmb {
  position: relative;
  width: 25%;
  margin: auto;
}

.image {
  display: block;
  width: 25%;
  height: auto;
  margin: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 40%;
  opacity: 0;
  margin:auto;
  transition: .5s ease;
  background-color: ;
  border-radius : 15%;
}

.container-gmb:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 110%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

            /* Hover Blur Effect */
    .text-white {
      color: #fff;
    }
    .hover-blur a {
      display: block;
      position: relative;
      overflow: hidden;
    }
    .hover-blur img {
      width: 100%;
      height: auto;
      -webkit-transition: all 0.5s ease-in-out;
      -moz-transition: all 0.5s ease-in-out;
      -o-transition: all 0.5s ease-in-out;
      -ms-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
    }
    .hover-blur:hover img {
      -webkit-transform: scale(1.2);
      -moz-transform: scale(1.2);
      -o-transform: scale(1.2);
      -ms-transform: scale(1.2);
      transform: scale(1.2);
      -webkit-filter: grayscale(0.6) blur(1px);
      filter: grayscale(0.6) blur(1px);
    }
    .hover-blur a h2 {
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      margin-top: 0px;
      margin-bottom: 0px;
      height: 100%;
      width: 100%;
      padding: 45% 20px;
      text-align: center;
      background-color: rgba(0,0,0,0.5);
      /*background dotted*/
      background-image: -webkit-repeating-radial-gradient(center center, rgba(0,0,0,.8), rgba(0,0,0,.8) 1px, transparent 1px, transparent 100%);
      background-image: -moz-repeating-radial-gradient(center center, rgba(0,0,0,.8), rgba(0,0,0,.8) 1px, transparent 1px, transparent 100%);
      background-image: -ms-repeating-radial-gradient(center center, rgba(0,0,0,.8), rgba(0,0,0,.8) 1px, transparent 1px, transparent 100%);
      background-image: repeating-radial-gradient(center center, rgba(0,0,0,.8), rgba(0,0,0,.8) 1px, transparent 1px, transparent 100%);
      -webkit-background-size: 3px 3px;
      -moz-background-size: 3px 3px;
      background-size: 3px 3px;
      -webkit-transition: all 0.5s linear;
      -moz-transition: all 0.5s linear;
      -o-transition: all 0.5s linear;
      -ms-transition: all 0.5s linear;
      transition: all 0.5s linear;
      -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
      filter: alpha(opacity=0);
      opacity: 0;
    }
    .hover-blur:hover a h2 {
      -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)";
      filter: alpha(opacity=100);
      opacity: 1;
    }
    .hover-blur .text-white {
      -webkit-transform: scale(0);
      -moz-transform: scale(0);
      -o-transform: scale(0);
      -ms-transform: scale(0);
      transform: scale(0);
      -webkit-transition: all 0.5s linear;
      -moz-transition: all 0.5s linear;
      -o-transition: all 0.5s linear;
      -ms-transition: all 0.5s linear;
      transition: all 0.5s linear;
      -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
      filter: alpha(opacity=0);
      opacity: 0;
    }
    .hover-blur:hover .text-white {
      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -o-transform: scale(1);
      -ms-transform: scale(1);
      transform: scale(1);
      -webkit-transition: all 0.5s linear;
      -moz-transition: all 0.5s linear;
      -o-transition: all 0.5s linear;
      -ms-transition: all 0.5s linear;
      transition: all 0.5s linear;
      -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=1)";
      filter: alpha(opacity=1);
      opacity: 1;
    }
                /*Scrollbar*/
            -moz-scrollbar-none{
                width: 0px;;
            }
            ::-moz-scrollbar{
                width: 0px;
            }
            ::-webkit-scrollbar{
                width: 0px;
            }
            ::-webkit-scrollbar-track{
                background: -webkit-linear-gradient(#7c6b4c,#9b89625e)
            }
            ::-webkit-scrollbar-thumb{
                background: -webkit-linear-gradient(#9b89625e,#7c6b4c)
            }
            .parallax{
                      /* The image used */
                        background-image: url("img/logo.png");

                      /* Set a specific height */
                      min-height: 680px;

                      /* Create the parallax scrolling effect */
                      background-attachment: fixed;
                      background-position: center;
                      background-repeat: no-repeat;
                      background-size: 250px;
                      background-color: #007bff
            }
            .timmana {
                    font-family: 'Timmana';
                    font-size: 175px;
                    margin-top: 100px;
                    color: white;
            }
            .warna{
                background: linear-gradient(to bottom left, #003366 0%, #006496 100%);
            }
            body{
                background: #eee;
            }
            span{
                font-size:15px;
            }
            a{
                text-decoration:none; 
                color: #0062cc;
                border-bottom:2px solid #0062cc;
            }
            .box{
                padding:60px 0px;
            }

            .box-part{
                background:#FFF;
                border-radius:0;
                padding:60px 10px;
                margin:30px 0px;
            }
            .text{
                margin:20px 0px;
            }

            .fa{
                color:#4183D7;
            }
            .ic{
                width:25%;
                padding:10px;
            }
            .blue{
                background-color: #009DDC;
                border-radius: 5%;
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
                        <img class="image" src="img/bell.png" alt="">
                        <div class="overlay">
                            <div class="text">About Us</div>
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
