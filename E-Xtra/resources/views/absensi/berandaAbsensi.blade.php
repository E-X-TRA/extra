<!DOCTYPE html>
<html>
<head>
	<title>Absensi</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}">

	<script type="text/javascript" src="public/js/jquery.min.js"></script>
	<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
</head>
<body class="bg-grd">
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

		$today = Carbon::today();
	@endphp
	<div class="container">
	 <div class="row">
		 <div class="col-md-1-12">
				<div class="card">
				<img class="card-img-top" src="holder.js/100x180/" alt="">
				<div class="card-body">
				Hari ini, {{ $today->toDateString() }}
			<br>
				<a class="btn btn-primary" href="{{url('/absensi/buatKumpul')}}">MULAI</a>
			<div>
				Jumlah Anggota : xx
				<a href="{{ url('/absensi/anggota') }}">Details</a>
			</div>
			<div>
				Jumlah Pertemuan hingga hari ini : xx
				<a href="{{ url('/absensi/rekapan') }}">Lihat Rekap</a>
			</div>
				</div>
			</div>
			</div>
		 </div>
	 </div>
	</div>
</body>
</html>
