<!DOCTYPE html>
<html>
<head>
	<title>Buat Pertemuan</title>
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<body>
<div class="container">
	<div class="row">
		<div class="col-md-1-12">
		<h1>Form Pertemuan</h1>
	@php
		use Carbon\Carbon;

		$today = Carbon::today();
	@endphp
<form method="POST" action="{{ url('/absensi') }}">
	@csrf
			<div class="card">
				<img class="card-img-top" src="holder.js/100x180/" alt="">
				<div class="card-body">
				<label>Tanggal</label>
				<input type="date" name="tanggal" value="{{ $today->toDateString() }}">
				<br>
				<label>Kegiatan</label>
				<input type="text" name="kegiatan"><br>
				<input class="btn btn-primary" type="submit" value="SUBMIT">
				</div>
			</div>
		</div>
	</div>
</div>


</form>
</body>
</html>