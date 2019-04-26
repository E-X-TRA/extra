<!DOCTYPE html>
<html>
<head>
    <title>Absensi</title>

    <link rel="icon" href="{{ asset('img/logo.png') }}" >

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
	@php
		use Carbon\Carbon;

		$today  = Carbon::today();
	@endphp
	 <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-10">
                <div class="card" style="margin:210px; padding: 30px;">
                    <div class="card-body">
                        <h4 class="card-title text-center">{{ $today->isoFormat('dddd , Do MMMM GGGG') }}</h4>
                        <p class="card-text">Jumlah Anggota : xx <a href="{{ url('/anggota') }}"">Details</a></p>
                        <p class="card-text">Jumlah Pertemuan hingga hari ini : xx <a href="{{ url('/absensi/rekapan') }}">Lihat Rekap</a></p>
                        <a class="btn btn-primary card-link" href="{{url('/absensi/buatKumpul')}}">MULAI</a>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>

        {{-- javascript --}}
    <script src="{{ asset('/js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js')}}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
