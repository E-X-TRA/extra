<!DOCTYPE html>
<html>
<head>
	<title>Tabel Kas</title>
</head>

<link rel="icon" href="{{ asset('img/logo.png') }}" >

<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.0.min.js"></script>
<body style="background-color: #5eb1bf">
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


    @extends('layouts.app')
    <div class="container">
        @section('content')
        <div class="row">
            <div class="col">

            </div>
            <div class="col-8">
                    <div class="jumbotron">
                            <h1 class="display-4">Form Catat Uang Kas</h1>
                            <hr>
                             <form action="{{ url('/uangKas') }}" method="POST">
                                 @csrf
                                 <div class="form-group">
                                     <label for="tglPertemuan">Tanggal Pertemuan</label>
                                     <select class="form-control" name="id_pertemuan" id="tglPertemuan">
                                         @foreach($pertemuan as $data)
                                             <option value="{{ $data->id }}">{{ $data->tanggal }}</option>
                                         @endforeach
                                         </select>
                                 </div>
                                 <div class="form-group">
                                   <label for="totalUang">Total Uang Kas Masuk</label>
                                   <div class="input-group">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text">Rp.</span>
                                     </div>
                                         <input type="text" id="currency" class="form-control" name="jumlah_masuk">
                                     </div>
                                   </div>
                                   <p class="lead">
                                        <input type="submit" value="SUBMIT" class="btn btn-primary">
                                   </p>
                             </form>
                        </div>
            </div>
            <div class="col">

            </div>
        </div>
    </div>
    @endsection
</body>
{{-- <script type="text/javascript">
	var format = function(num){
	var str = num.toString().replace("$", ""), parts = false, output = [], i = 1, formatted = null;
	if(str.indexOf(".") > 0) {
		parts = str.split(".");
		str = parts[0];
	}
	str = str.split("").reverse();
	for(var j = 0, len = str.length; j < len; j++) {
		if(str[j] != ",") {
			output.push(str[j]);
			if(i%3 == 0 && j < (len - 1)) {
				output.push(",");
			}
			i++;
		}
	}
	formatted = output.reverse().join("");
	return("" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
};
$(function(){
    $("#currency").keyup(function(e){
        $(this).val(format($(this).val()));
    });
});
</script> --}}
</html>
