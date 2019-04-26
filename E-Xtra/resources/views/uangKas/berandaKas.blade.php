<!DOCTYPE html>
<html>
<head>
	<title>Tabel Kas</title>
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
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
	<p>Jumlah Uang Kas : Rp.xxx</p>

	<p>Target Menabung Ekskul : Rp.xxx</p>
	Tanggal Pertemuan :
	<br>
	<a href="{{ url('/uangKas/catat') }}">Catat UangKas</a>
	<hr>
<table>
	<tr>
		<th>Tanggal</th>
		<th>Jumlah Yang Masuk</th>
	</tr>
	@foreach ($uangKas as $data)
	<tr>
		<td>{{ $data->tanggal }}</td>
		<td>{{ $data->jumlah_masuk }}</td>
		<td>
			<form action="{{ url('/uangKas/catat/' . $data->id) }}" method="POST">
				@method('DELETE')
				@csrf
				<button type="submit" class="btn btn-danger">Delete</button>
			</form>
		</td>
	</tr>
	@endforeach
</table>
</body>

<script>
	var e = document.getElementById("idPertemuan");
	var idPertemuan = e.options[e.selectedIndex].value;
</script>
</html>