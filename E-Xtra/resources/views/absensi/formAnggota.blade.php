<!DOCTYPE html>
<html>
<head>
	<title>Form Input Anggota</title>
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<link rel="icon" href="{{ asset('img/logo.png') }}" >
<body style="background-color: #006494">

@extends('layouts.app')

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
        @section('content')
	<div class="row">
		<div class="col"></div>
        <div class="col-6 my-5">
            <div class="card text-left">
              <div class="card-body">
                <h4 class="card-title"><h1>Form Anggota Ekskul</h1></h4>
                <form action="{{ url('anggota', @$anggota->id) }}" method="POST">
                        @csrf
                        @if(!empty($anggota))
                            @method('PATCH')
                        @endif
                        <div class="p-2">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', @$anggota->nama) }}" />
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label><br>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="jenis_kelamin" value="L" id="jenkelL" class="custom-control-input" {{ old('jenis_kelamin', @$anggota->jenis_kelamin)=='L' ? 'checked' : '' }}/>
                                    <label for="jenkelL" class="custom-control-label">L</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="jenis_kelamin" value="P" id="jenkelP" class="custom-control-input" {{ old('jenis_kelamin', @$anggota->jenis_kelamin)=='P' ? 'checked' : '' }}/>
                                    <label for="jenkelP" class="custom-control-label">P</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <input type="text" name="kelas" id="kelas" class="form-control" value="{{ old('kelas', @$anggota->kelas) }}" />
                            </div>
                        </div>
                    <input class="btn btn-success p-2" type="submit" value="Simpan"/>
                </form>
                </div>
            </div>
        </div>
		<div class="col"></div>
	</div>
</div>
@endsection
</body>
</html>
