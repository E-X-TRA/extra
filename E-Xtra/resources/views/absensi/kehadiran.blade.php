<!DOCTYPE html>
<html>
<head>
	<title>Detail Pertemuan</title>
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<link rel="icon" href="{{ asset('img/logo.png') }}" >
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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
                <div class="col">
                <h3 class="py-2" style="font-family: Lato;">REKAPAN PERTEMUAN</h3> 
                <div class="row">
                    <h6>Kegiatan : {{ $namaKegiatan }}</h6>
                   <form action="{{ url('/absensi/rekapan/pertemuan/' . $idPertemuan) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form> 
                </div>
                </div>
            </div>
            <input type="text" name="search" id="search" class="form-control" placeholder="Search Nama Siswa" />
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
                            <td>{{ strtoupper($data->kehadiran) }}</td>
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
<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('rekapan.search',['id' => $idPertemuan]) }}",
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
