<!DOCTYPE html>
<html>
<head>
	<title>Tabel Kehadiran</title>
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
	 Hari ini, {{ $today->toDateString() }}
	<div>
		<a href="{{ url('/absensi/mengabsen/mulai') }}">MULAI MENGABSEN</a>
	</div>


	<a href="{{ url('/absensi/tambah') }}" class="btn btn-primary mb-2">Tambah</a>
	<tr>
		<th>NIK</th>
		<th>Nama</th>
		<th>Tanggal</th>
		<th>Kehadiran</th>
	</tr>
	@foreach ($kehadiran as $data)
	<tr>
		<td>{{ $data->nik }}</td>
		<td>{{ $data->nama }}</td>
		<td>{{ $data->kehadiran }}</td>
		<td>{{ $data->tanggal }}</td>
	</tr>
	@endforeach
</table>
</body>
</html>