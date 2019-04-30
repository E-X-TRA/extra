<!DOCTYPE html>
<html>
<head>
	<title>Buat Pertemuan</title>
</head>

<link rel="icon" href="{{ asset('img/logo.png') }}" >

{{-- css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}">
@extends('layouts.app')


<body style="background-color: #042a2b">
    <div class="container">
        @section('content')
	<div class="row">
		<div class="col"></div>
        <div class="col-8 mt-5" >
            @php
		        use Carbon\Carbon;

		        $today = Carbon::today();
	        @endphp
            <form method="POST" action="{{ url('/absensi') }}">
	            @csrf
            <div class="jumbotron jumbotron">
                <div class="container">
                    <h1 class="display-3">Form Pertemuan</h1>
                    <div class="form-group">
                        <label for="tgl">Tanggal :</label>
                        <input type="date" name="tanggal" value="{{ $today->toDateString() }}" id="tgl" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="kegiatan">Kegiatan :</label>
                        <input type="text" name="kegiatan" id="kegiatan" class="form-control">
                    </div>
                        <hr>
                    <input class="btn btn-primary" type="submit" value="SUBMIT">
                </div>
            </div>
            </form>
        </div>
        <div class="col"></div>
	</div>
</div>
@endsection
{{-- JavaScript --}}
<script src="{{ asset('/js/jquery.slim.min.js') }}"></script>
<script src="{{ asset('/js/popper.min.js') }}"></script>
<script src="{{ asset('/js/bootstrap.min.js')}}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
