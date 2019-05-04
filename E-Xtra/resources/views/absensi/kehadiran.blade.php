<!DOCTYPE html>
<html>
<head>
	<title>Detail Pertemuan</title>
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<link rel="icon" href="{{ asset('img/logo.png') }}" >
<style>
	.stuff{
	background-color: white;

}
    .my-custom-scrollbar {
    position: relative;
    height: 475px;
    overflow: auto;
    }
    .table-wrapper-scroll-y {
    display: block;
	}
</style>
<body style="background-color: #006494; overflow-x: hidden;">
@extends('layouts.app')

<div class="container">
    @section('content')
    <div class="row">
		<div class="col"></div>
		<div class="col-10">
			<div class="col stuff rounded">
				<h4 class="py-4">Rekapan Pertemuan</h4>
            </div>
            <div class="my-custom-scrollbar table-wrapper-scroll-y">
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
		</div>
		<div class="col"></div>

	</div>
</div>
@endsection
</body>
</html>
