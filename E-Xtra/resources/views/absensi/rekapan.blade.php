<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="icon" href="{{ asset('img/logo.png') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<body style="background-color: #006494; overflow-x: hidden;">
@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col"></div>

	<div class="col">
		<div class="card">
			<img class="card-img-top" src="holder.js/100x180/" alt="">
			<div class="card-body">
				<h4 class="card-title text-center">Jumlah Pertemuan : 0</h4>
			</div>
		</div>
	</div>

	<div class="col"></div>
</div>


<br>
<div class="container">
	<div class="row">
		<div class="col">
			<table class="table table-dark table-striped rounded">
				<thead>
					<tr>
						<th>Tanggal Pertemuan</th>
						<th>Kegiatan</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($pertemuan as $data)
					<tr>
						<td>{{$data->tanggal}}</td>
						<td>{{$data->kegiatan}}</td>
						<td>
							<a href="{{ url('/absensi/rekapan/pertemuan',$data->id) }}">DETAIL</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		
	</div>
</div>

@endsection
</body>
</html>
