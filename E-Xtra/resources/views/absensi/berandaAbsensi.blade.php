<!DOCTYPE html>
<html>
<head>
	<title>Absensi</title>
</head>
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
<table>
	<div>
		<a href="{{ url('/absensi/mengabsen') }}">MULAI MENGABSEN</a>
	</div>


	<a href="{{ url('/absensi/tambah') }}" class="btn btn-primary mb-2">Tambah</a>
	<tr>
		<th>NIK</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Gender</th>
		<th>Aksi</th>
	</tr>
	@foreach ($anggota as $data)
	<tr>
		<td>{{ $data->nik }}</td>
		<td>{{ $data->nama }}</td>
		<td>{{ $data->kelas }}</td>
		<td>{{ $data->jenis_kelamin }}</td>
		<td class="px-0" align="center">
				<a href="{{ url('/absensi/' . $data->id . '/ubah') }}" class="btn btn-primary">Edit</a>
			</td>
			<td class="px-0" align="center">
				<form action="{{ url('/absensi/' . $data->id) }}" method="POST">
					@method('DELETE')
					@csrf
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
	</tr>
	@endforeach
</table>
</body>
</html>