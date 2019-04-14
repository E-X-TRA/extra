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
		<input type="hidden" name="id_pertemuan" value="{{ $pertemuan }}">
		@foreach ($absen as $data)
		<input type="hidden" name="id[{{ $data->id }}]" value="{{ $data->id }}">
		{{ $data->nama }}
		<input type="radio" name="kehadiran[{{ $data->id }}]" value="hadir">Hadir
		<input type="radio" name="kehadiran[{{ $data->id }}]" value="tidak hadir">Tidak Hadir
		<br>
	@endforeach	
	<input type="submit" value="SUBMIT">
	</form>
</body>
</html>