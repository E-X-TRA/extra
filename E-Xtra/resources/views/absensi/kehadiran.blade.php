<!DOCTYPE html>
<html>
<head>
	<title>Tabel Kehadiran</title>
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
<script type="text/javascript">
	$(document).ready( function () {
    $('#tabelKehadiran').DataTable();
});
</script>
</html>