<!DOCTYPE html>
<html>
<head>
	<title>Form Input Anggota</title>
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<link rel="icon" href="{{ asset('img/logo.png') }}" >
<body>

@extends('layouts.app')
@section('content')

@if(session('error'))
<div class="alert alert-error">
	{{ session('error') }}
</div>
@endif

@if(count($errors) > 0)
<div class="alert alert-danger">
	<strong>PERHATIAN</strong><br>
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<div class="container">
	<div class="row">
		<div class="col"></div>

		<div class="card text-left">
		  <img class="card-img-top" src="holder.js/100px180/" alt="">
		  <div class="card-body">
			<h4 class="card-title"><h1>Form Anggota Ekskul</h1></h4>
			<form action="{{ url('anggota', @$anggota->id) }}" method="POST">
					@csrf

					@if(!empty($anggota))
						@method('PATCH')
					@endif

					<div class="p-2">

					<br><label>Nama Lengkap</label>
					<input type="text" name="nama" value="{{ old('nama', @$anggota->nama) }}" />
					<br><label>Jenis Kelamin:</label><br>
							<input type="radio" name="jenis_kelamin" value="L" {{ old('jenis_kelamin', @$anggota->jenis_kelamin)=='L' ? 'checked' : '' }}/>L
							<input type="radio" name="jenis_kelamin" value="P" {{ old('jenis_kelamin', @$anggota->jenis_kelamin)=='P' ? 'checked' : '' }}/>P
							<br>
					<label>Kelas:</label>
					
						<input type="text" name="kelas" value="{{ old('kelas', @$anggota->kelas) }}" />
					</div>
				<input class="btn btn-success p-2" type="submit" value="Simpan"/>
			</form>
			</div>
		</div>
		<div class="col"></div>
	</div>
</div>
@endsection
</body>
</html>
