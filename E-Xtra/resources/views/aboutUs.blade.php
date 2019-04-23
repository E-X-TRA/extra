<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

  </head>
  <body>

        <div class="container-fluid" style="margin-top: 8em;background-color: #1e2749;">
                <h1 class="ibm text-center">Our Team</h1>
            <div class="row">
            <div class="container" style="margin-top: 3em; margin-bottom: 3em;">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width:275px; margin-left: 40px; border-width: 5px;" >
                            <img class="card-img-top" src="{{ asset('img/paro.jpg') }}" alt="Card image" style="width:100%;">
                            <div class="card-body">
                              <h3 class="card-title">Back-end</h3>
                              <img src="{{ asset('img/back-end.png') }}" alt="Front End image"  class="card-title float-right" width="50px">
                              <h5 class="card-title">Alvaro Dwi </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width:275px; margin-left: 40px; border-width: 5px;" >
                            <img class="card-img-top" src="{{ asset('img/ikal.jpg') }}" alt="Card image" style="width:100%;">
                            <div class="card-body">
                              <h3 class="card-title">Front-end</h3>
                              <img src="{{ asset('img/front-end.png') }}" alt="Front End image"  class="card-title float-right" width="50px">
                              <h5 class="card-title">M. Haikal </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width:275px; margin-left: 40px; border-width: 5px;" >
                            <img class="card-img-top" src="{{ asset('img/gaming.jpg') }}" alt="Card image" style="width:100%;">
                            <div class="card-body">
                              <h3 class="card-title">Front-end</h3>
                              <img src="{{ asset('img/front-end.png') }}" alt="Front End image"  class="card-title float-right" width="50px">
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
    <script src="{{ asset('/js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js')}}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


