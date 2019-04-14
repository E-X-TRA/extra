<!DOCTYPE html>
<html>
<head>
	<title>Absensi</title>
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.0.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<body>
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
	 Hari ini, {{ $today->toDateString() }}
	 <br>
	 <button>
	 	<a href="{{url('/absensi/buatKumpul')}}">MULAI</a>
	 </button>

	 <div>
	 	Jumlah Anggota : xx
	 	<a href="{{ url('/absensi/anggota') }}">Details</a>
	 </div>

	 <div>
	 	Jumlah Pertemuan hingga hari ini : xx
	 	<a href="{{ url('/absensi/rekapan') }}">Lihat Rekap</a>
	 </div>
</body>
</html>