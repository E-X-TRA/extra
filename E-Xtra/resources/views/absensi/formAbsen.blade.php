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
	</form>
	 </div>
	 
</body>
</html>