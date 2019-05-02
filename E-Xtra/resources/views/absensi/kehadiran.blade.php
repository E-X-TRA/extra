<!DOCTYPE html>
<html>
<head>
	<title>Tabel Kehadiran</title>
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<link rel="icon" href="{{ asset('img/logo.png') }}" >
<style>
	.stuff{
	background-color: white;
}
</style>
<body style="background-color: #006494; overflow-x: hidden;">
@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col"></div>
		<div class="col-10">
			<div class="col stuff rounded">
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
			</div>
			<table id="tabelKehadiran" class="table table-dark table-striped rounded">
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
		</div>
		<div class="col"></div>
		
	</div>
</div>
@endsection
</body>
</html>
