<!DOCTYPE html>
<html>

<head>
    <title>Absensi</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}">
    <style>
    </style>
</head>

<body class="bg-grd" style="background-color: #042a2b">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if(session('error'))
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
    @endif
    @extends('layouts.app')
    <div class="container">
        @section('content')
        <div class="row">
            <div class="col"></div>
            <div class="col-8">
                <div class="card" style="margin: 66px;">
                    <div class="card-body text-center">
                        <a class="card-link " href="{{ url('/absensi/buatKumpul')}}" style=" font-size: 40px;">MULAI</a>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <div class="container bg-white" style="height: 250px;">
        <h1 class="text-center" style="padding: 10px;">STATISTIK</h1>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <blockquote class="blockquote text-center">
                            <p>Jumlah Anggota : {{ $anggota->COUNT('id') }}</p>
                            <footer class="card-blockquote"><a href="{{ url('/anggota') }}">Details</a></footer>
                        </blockquote>
                    </div>
                </div>
            
            </div>
            <div class="col-2">
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <blockquote class="blockquote text-center">
                            <p>Jumlah Pertemuan : {{ $pertemuan->COUNT('id') }}</p>
                            <footer class="card-blockquote"><a href="{{ url('/absensi/rekapan') }}">Lihat Rekap</a></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- javascript --}}
    <script src="{{ asset('/js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js')}}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    @endsection
</body>

</html>
