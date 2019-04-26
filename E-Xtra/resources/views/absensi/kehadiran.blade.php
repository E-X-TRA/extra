<!DOCTYPE html>
<html>
<head>
	<title>Tabel Kehadiran</title>
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<link rel="icon" href="{{ asset('img/logo.png') }}" >
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
	<?php
	use Carbon\Carbon;

	$today = Carbon::today();
	 ?>
	 Hari ini, {{ $today->toDateString() }}

<table id="tabelKehadiran">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Kehadiran</th>
			<th>Tanggal</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($kehadiran as $data)
		<tr>
			<td>{{ $data->nama }}</td>
			<td>{{ $data->kehadiran }}</td>
			<td>{{ $data->tanggal }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
</body>
</html>
