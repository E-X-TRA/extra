<!DOCTYPE html>
<html>
<head>
	<title>Buat Pertemuan</title>
</head>
<body>
	<h1>Form Pertemuan</h1>
	@php
		use Carbon\Carbon;

		$today = Carbon::today();
	@endphp
<form method="POST" action="{{ url('/absensi') }}">
	@csrf

	<br>
	<label>Tanggal</label>
	<input type="date" name="tanggal" value="{{ $today->toDateString() }}">
	<br>
	<label>Kegiatan</label>
	<input type="text" name="kegiatan"><br>
	<input type="submit" value="SUBMIT">
</form>
</body>
</html>