<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="icon" href="{{ asset('img/logo.png') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

<style>
    .my-custom-scrollbar {
    position: relative;
    height: 425px;
    overflow: auto;
    }
    .table-wrapper-scroll-y {
    display: block;
	}
</style>
<body style="background-color: #006494; overflow-x: hidden;">
        @extends('layouts.app')

        <div class="container">
            <div class="row">
                    @section('content')
            </div>

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
                        <div class="my-custom-scrollbar table-wrapper-scroll-y">
                            <table class="table table-dark table-striped rounded">
                                <thead>
                                    <tr>
                                        <th>Tanggal Pertemuan</th>
                                        <th>Kegiatan</th>
                                        <th>Aksi</th>
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
            </div>

            @endsection

</div>
</body>
</html>
