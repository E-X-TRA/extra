<!DOCTYPE html>
<html>
<head>
	<title>Tabel Kas</title>
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.0.min.js"></script>
<body>
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
	<form method="POST" action="{{ url('/uangKas') }}">
		@csrf
		<h1>Form Catat Uang Kas</h1>
		<hr>
		<label>Tanggal Pertemuan</label>
		<select class="custom-select" name="id_pertemuan">
		@foreach($pertemuan as $data)
			<option value="{{ $data->id }}">{{ $data->tanggal }}</option>
		@endforeach
		</select>
		<div class="form-group">
		<label>Total Uang Kas Masuk</label>
	    <div class="input-group mb-3">
	      <div class="input-group-prepend">
	        <span class="input-group-text">Rp.</span>
	      </div>
	      <input type="text" id="currency" class="form-control" name="jumlah_masuk">
	      <div class="input-group-append">
	        <span class="input-group-text">.00</span>
	      </div>
	    </div>
	  </div>
	  <input type="submit" value="SUBMIT">
	</form>
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