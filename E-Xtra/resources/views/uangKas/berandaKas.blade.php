<!DOCTYPE html>
<html>
<head>
	<title>Tabel Kas</title>
</head>

<link rel="icon" href="{{ asset('img/logo.png') }}" >

<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">

<style>
.my-custom-scrollbar {
    position: relative;
    height: 175px;
    overflow: auto;
}
.table-wrapper-scroll-y {
    display: block;
}
</style>
<body style="background-color: #5eb1bf">

    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="target"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            </div>
        </div>
    </div>


    @extends('layouts.app')
    <div class="container">
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
        <div class="row my-1">
            <div class="col">
                <div class="card" style="background-color: #1e2749; color: ivory;">
                  <div class="card-body" style=" margin-bottom: 2px;">
                    <blockquote class="blockquote">
                      <p>Jumlah Uang Kas Eskul</p>
                      <footer class="card-blockquote"><cite title="Total Uang Kas">Rp. {{ $totalKas->SUM('jumlah_masuk') }}</cite></footer>
                    </blockquote>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="background-color: #1e2749; color: seashell">
                  <div class="card-body">
                    <blockquote class="blockquote">
                      <p>Target Menabung Ekskul</p>
                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelId" onclick="targetKas()">
                            Masukan Uang Kas Anda
                          </button>
                    </blockquote>
                  </div>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col"></div>
            <div class="col-6">
                <div class="card m-1  justify-content-center">
                    <div class="card-body text-center">
                        <a class="card-link " href="{{ url('/uangKas/catat')}}" style=" font-size: 40px;">Catat Uang Kas</a>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-12" >
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                        <table class="table table-striped table-inverse table-responsive">
                                <thead class="thead-inverse" >
                                    <tr>
                                        <th style="width: 200px;">No</th>
                                        <th style="width: 350px;">Tanggal</th>
                                        <th style="width: 350px;">Jumlah yang masuk</th>
                                        <th style="width: 200px;">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                            @foreach ($uangKas as $data)
                                        <tr>
                                            <td scope="row">{{ isset($i) ? ++$i : $i = 1 }}</td>
                                            <td>{{ $data->tanggal }}</td>
                                            <td>Rp. {{ $data->jumlah_masuk }}</td>
                                            <td>
                                               <form action="{{ url('/uangKas/catat/' . $data->id) }}" method="POST">
                                                   @method('DELETE')
                                                   @csrf
                                                   <button type="submit" class="btn btn-danger">Delete</button>
                                               </form>
                                            </td>
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
    function targetKas() {
        var hasil = {{ $totalKas->SUM('jumlah_masuk') }};
        var masuk = prompt("Masukan Jumlah Target Anda");
        var kata
        if (hasil<masuk){
            kata = "Target Uang Kas Anda Tercapai";
        }
        else{
            kata = "Target Uang Kas Anda Belum Tercapai";
        }
        document.getElementById("target").innerHTML=kata;
    }
	var e = document.getElementById("idPertemuan");
	var idPertemuan = e.options[e.selectedIndex].value;
</script>
</html>
