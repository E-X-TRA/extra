<!DOCTYPE html>
<html>
<head>
    <title>Prosedur Mengabsen</title>
</head>
<link rel="icon" href="{{ asset('img/logo.png') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <style>
        .my-custom-scrollbar {
    position: relative;
    height: 420px;
    overflow: auto;
    }
    .table-wrapper-scroll-y {
    display: block;
    }
    </style>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.0.min.js"></script>
<body style="background-color: #042a2b">
	<?php
	use Carbon\Carbon;
	$today = Carbon::today();
     ?>
     @extends('layouts.app')
     <div class="container">
         <div class="row">
                @section('content')
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
            <div class="col">
                    <form action="{{ url('absensi/mengabsen') }}" method="POST">
                        @csrf
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table table-striped table-inverse table-responsive">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th style="width: 300px;">No</th>
                                        <th style="width: 500px;">Anggota</th>
                                        <th style="width: 300px;">Kehadiran</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                            <input type="hidden" name="id_pertemuan" value="{{ $pertemuan }}">
                                        @foreach ($absen as $data)
                                        <tr>
                                            <td scope="row">{{ isset($i) ? ++$i : $i = 1 }}</td>
                                            <td>
                                                <input type="hidden" name="id[{{ $data->id }}]" value="{{ $data->id }}">
                                                <input type="hidden" name="tanggal[{{ $data->id }}]" value="{{ $today->toDateString() }}">
                                                {{ $data->nama }}
                                            </td>
                                            <td>
                                                <input type="radio" name="kehadiran[{{ $data->id }}]" value="hadir" checked>Hadir
                                                <input type="radio" name="kehadiran[{{ $data->id }}]" value="tidak hadir">Tidak Hadir
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
                        <input class="btn btn-success mt-2" type="submit" value="SUBMIT">
                    </form>
            </div>
        </div>
        @endsection
        </div>

    </body>
    </html>
    {{-- 
    backup untuk tabel aka versi default paro
    <form action="{{ url('absensi/mengabsen') }}" method="POST">
        @csrf
        <input type="text" name="tanggal" value="{{ $today->toDateString() }}"><br>

        <table class="table table-striped table-dark">
            <tr>
                <th>Anggota</th>
                <th>Kehadiran</th>
            </tr>
            <input type="hidden" name="id_pertemuan" value="{{ $pertemuan }}">
            @foreach ($absen as $data)
            <tr>
                <td>
                    <input type="hidden" name="id[{{ $data->id }}]" value="{{ $data->id }}">
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

</form> --}}
