<!DOCTYPE html>
<html>
<head>
	<title>Absensi</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css')}}">

	<script type="text/javascript" src="public/js/jquery.min.js"></script>
	<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.0.min.js"></script>
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
	<div class="container">
	<?php
	use Carbon\Carbon;

	$today = Carbon::today();
	 ?>
	 
<<<<<<< HEAD
		<form action="{{ url('absensi/mengabsen') }}" method="POST">
			@csrf
			<input type="text" name="tanggal" value="{{ $today->toDateString() }}"><br>

			<table class="table table-striped table-dark">
				<tr>
					<th>Anggota</th>
					<th>Kehadiran</th>
				</tr>
				@foreach ($absen as $data)
				<tr>
					<td>
						<input type="hidden" name="nik[{{ $data->id }}]" value="{{ $data->nik }}">
						<input type="hidden" name="tanggal[{{ $data->id }}]" value="{{ $today->toDateString() }}">
						{{ $data->nama }}
					</td>
					
					<td>
						<input type="radio" name="kehadiran[{{ $data->id }}]" value="hadir">Hadir
						<input type="radio" name="kehadiran[{{ $data->id }}]" value="tidak hadir">Tidak Hadir
					</td>
				</tr>
				@endforeach	
			</table>

			<br>
		
		<input class="btn btn-success" type="submit" value="SUBMIT">
=======
	 <form action="{{ url('absensi/mengabsen') }}" method="POST">
	 	@csrf
		<input type="text" name="tanggal" value="{{ $today->toDateString() }}" disable><br>
		<input type="hidden" name="id_pertemuan" value="{{ $pertemuan }}">

		<table id="tabelKehadiran">
				<tr>
					<th>Nama Anggota</th>
					<th>Kehadiran</th>
				</tr>
				@foreach ($absen as $data)
				<input type="hidden" name="id[{{ $data->id }}]" value="{{ $data->id }}">
				<tr>
					<td><label>{{ $data->nama }}</label></td>
					<td>
							<input type="radio" name="kehadiran[{{ $data->id }}]" value="hadir">
							<span>Hadir</span>
						<input  type="radio" name="kehadiran[{{ $data->id }}]" value="tidak hadir"><span>Tidak Hadir</span>
					</td>
				</tr>
				@endforeach
		</table>	
	<input type="submit" value="SUBMIT">
>>>>>>> 55cab9b0125087db9a34b190e435d0f5f09fd35c
	</form>
	 </div>
	 
</body>
</html>