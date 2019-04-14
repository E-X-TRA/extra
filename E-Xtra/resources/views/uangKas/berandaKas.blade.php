<!DOCTYPE html>
<html>
<head>
	<title>Tabel Kas</title>
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
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
	
	@php
	use Carbon\Carbon;

	$today = Carbon::today();
	@endphp
	 Hari ini, {{ $today->toDateString() }}

	<a href="{{ url('/absensi/tambah') }}" class="btn btn-primary mb-2">Tambah</a>
	<tr>
		<th>Tanggal</th>
		<th>Jumlah Yang Masuk</th>
	</tr>
	@foreach ($uangKas as $data)
	<tr>
		<td>{{ $data->tanggal }}</td>
		<td>{{ $data->jumlah_masuk }}</td>
	</tr>
	@endforeach
</table>
</body>
</html>