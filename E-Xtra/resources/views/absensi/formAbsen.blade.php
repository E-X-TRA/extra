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
<table>
	<?php
	use Carbon\Carbon;

	$today = Carbon::today();
	 ?>
	 
	 <form action="{{ url('absensi/mengabsen') }}" method="POST">
	 	@csrf
		<input type="text" name="tanggal" value="{{ $today->toDateString() }}"><br>

		@foreach ($absen as $data)
		<input type="hidden" name="nik[{{ $data->id }}]" value="{{ $data->nik }}">
		<input type="hidden" name="tanggal[{{ $data->id }}]" value="{{ $today->toDateString() }}">
		{{ $data->nama }}
		<input type="radio" name="kehadiran[{{ $data->id }}]" value="hadir">Hadir
		<input type="radio" name="kehadiran[{{ $data->id }}]" value="tidak hadir">Tidak Hadir
		<br>
	@endforeach	
	<input type="submit" value="SUBMIT">
	</form>
</body>
</html>