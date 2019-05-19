<!DOCTYPE html>
<html>
<head>
	<title>Keanggotaan</title>
</head>

<link rel="icon" href="{{ asset('img/logo.png') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<style>
    .my-custom-scrollbar {
    position: relative;
    height: 170px;
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


<h1 class="text-center" style="color: white;">DAFTAR ANGGOTA</h1>

	<div class="container">
		<div class="row rounded bg-light" >

			<div class="col d-flex justify-content-center">
				<a href="{{ url('/anggota/tambah') }}" class="btn btn-primary mt-3">TAMBAH ANGGOTA BARU</a>
                <a class="btn btn-secondary mt-3 ml-1" href="{{ url('/absensi') }}">MENUJU ABSENSI</a>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <div class="d-inline-flex p-3">
                    <div class="btn">
                        Laki - Laki :
                        {{ $anggota->where('jenis_kelamin','L')->COUNT('jenis_kelamin') }}
                    </div>
                    <div class="btn">
                        |
                    </div>
                    <div class="btn">
                     Perempuan :
                        {{ $anggota->where('jenis_kelamin','P')->COUNT('jenis_kelamin') }}
                    </div>
                </div>
            </div>
        </div>
        <input type="text" name="search" id="search" class="form-control mt-3" placeholder="Search Nama atau Kelas" />
        @if(session('success'))
	<div class="alert alert-success mt-3">
		{{ session('success') }}
	</div>
	@endif

	@if(session('error'))
	<div class="alert alert-error mt-3">
		{{ session('error') }}
	</div>
	@endif

	@php
	use Carbon\Carbon;

	$today = Carbon::today();
	@endphp


	 @auth {{-- kalo belom login gabakal muncul --}}
	</div>
	@endauth


	<div class="container">
		<div class="row">
			<div class="col"></div>
			<div class="col-12">
                <div class="my-custom-scrollbar table-wrapper-scroll-y mt-3">
                    <table id="tabelAnggota" class="table table-dark table-striped rounded ">
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
                            <td>{{ strtoupper($data->nama) }}</td>
                            <td>{{ $data->kelas }}</td>
                            <td>{{ $data->jenis_kelamin }}</td>
                            @auth
                            <td class="px-0" align="center">
                                    <a href="{{ url('/anggota/' . $data->id . '/ubah') }}" class="btn btn-primary">EDIT/a>
                            </td>
                            <td class="px-0" align="center">
                                <form action="{{ url('/anggota/' . $data->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">HAPUS</button>
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
<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('anggota.search') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>
</html>
