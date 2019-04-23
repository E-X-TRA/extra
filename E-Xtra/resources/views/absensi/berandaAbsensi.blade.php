<!DOCTYPE html>
<html>
<head>
	<title>Absensi</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}">

    <style>
        body{
            background-color:
        }
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
                        <p class="card-text">Jumlah Anggota : xx <a href="{{ url('/absensi/anggota') }}"">Details</a></p>
                        <p class="card-text">Jumlah Pertemuan hingga hari ini : xx <a href="{{ url('/absensi/rekapan') }}">Lihat Rekap</a></p>
                        <a class="btn btn-primary card-link" href="{{url('/absensi/buatKumpul')}}">MULAI</a>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <script type="text/javascript" src="public/js/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
</body>
</html>
