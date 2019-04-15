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
	<div class="container">
	<table class="table table-dark">
	
	<?php
	use Carbon\Carbon;

	$today = Carbon::today();
	 ?>
	 Hari ini, {{ $today->toDateString() }}
	<div>
		<a class="btn btn-info" href="{{ url('/absensi/mengabsen/mulai') }}">MULAI MENGABSEN</a>
	</div>


	<a href="{{ url('/absensi/tambah') }}" class="btn btn-primary mb-2">Tambah</a>
	<tr>
		<th>NIK</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Gender</th>
		<th class="col-sm-" colspan="2"><center>Aksi</center></th>
	</tr>
	@foreach ($anggota as $data)
	<tr>
		<td>{{ $data->nik }}</td>
		<td>{{ $data->nama }}</td>
		<td>{{ $data->kelas }}</td>
		<td>{{ $data->jenis_kelamin }}</td>
		<td class="px-0" align="center">
				<a href="{{ url('/absensi/' . $data->id . '/ubah') }}" class="btn btn-primary">Edit</a>
			</td>
			<td class="px-0" align="center">
				<form action="{{ url('/absensi/' . $data->id) }}" method="POST">
					@method('DELETE')
					@csrf
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
	</tr>
	@endforeach
</table>
	</div>
</body>
</html>