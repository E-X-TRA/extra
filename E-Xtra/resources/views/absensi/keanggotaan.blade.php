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

<?php
	use Carbon\Carbon;

	$today = Carbon::today();
	 ?>
	 Hari ini, {{ $today->toDateString() }}
	<div>
		<a href="{{ url('/absensi/mengabsen/mulai') }}">MULAI MENGABSEN</a>
	</div>


	<a href="{{ url('/absensi/tambah') }}" class="btn btn-primary mb-2">Tambah</a>
	
<table id="tabelAnggota" class="">
	<thead>
		<tr>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Gender</th>
		<th>Edit</th>
		<th>Delete</th>
		</tr>
	</thead>
	<tbody>
	@foreach ($anggota as $data)
	<tr>
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
	</tbody>
</table>
</body>
</html>