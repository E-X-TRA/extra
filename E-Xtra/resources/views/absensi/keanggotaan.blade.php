<!DOCTYPE html>
<html>
<head>
	<title>Absensi</title>
</head>

<link rel="icon" href="{{ asset('img/logo.png') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.0.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<style>
    .my-custom-scrollbar {
    position: relative;
    height: 350px;
    overflow: auto;
    }
    .table-wrapper-scroll-y {
    display: block;
	}
	.stuff{
	background-color: white;
	}
	.hor{
		margin-top: 10px;
	}
</style>

<body   style="background-color: #006494;">


<div class="container">
@extends('layouts.app')
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

	@php
	use Carbon\Carbon;

	$today = Carbon::today();
	@endphp

<h1 class="text-center" style="color: white;">DAFTAR ANGGOTA</h1>
	 @auth {{-- kalo belom login gabakal muncul --}}

	<div class="container">
		<div class="row stuff rounded">
			<div class="col"></div>
			<div class="col hor">
				<p class="float-left" style="font-size: 20px;">Hari ini, {{ $today->toDateString() }}</p>
			</div>
			<div class="col"></div>
			<div class="col hor">
				<a href="{{ url('/anggota/tambah') }}" class="btn btn-primary mb-2 float-right">Tambah</a>
			</div>
				<div class="col"></div>
			</div>
		</div>
	</div>
	@endauth
	<div class="container">
		<div class="row">
			<div class="col"></div>
			<div class="col-12">
                <div class="my-custom-scrollbar table-wrapper-scroll-y">
                    <table id="tabelAnggota" class="table table-dark table-striped rounded">
                        <thead>
                            <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Gender</th>
                            @auth
                            <th colspan="2"><center>Action</center></th>
                            @endauth
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($anggota as $data)
                        <tr>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->kelas }}</td>
                            <td>{{ $data->jenis_kelamin }}</td>
                            @auth
                            <td class="px-0" align="center">
                                    <a href="{{ url('/anggota/' . $data->id . '/ubah') }}" class="btn btn-primary">Edit</a>
                            </td>
                            <td class="px-0" align="center">
                                <form action="{{ url('/anggota/' . $data->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                            @endauth
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
			</div>
			<div class="col"></div>
		</div>
	</div>
	@endsection
</body>
</html>
