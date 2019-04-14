<!DOCTYPE html>
<html>
<head>
	<title>Absensi</title>
</head>
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