<!DOCTYPE html>
<html>
<head>
	<title>Absensi</title>
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
<table>
	<?php
	use Carbon\Carbon;

	$today = Carbon::today();
	 ?>
	 
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
	</form>
</body>
</html>