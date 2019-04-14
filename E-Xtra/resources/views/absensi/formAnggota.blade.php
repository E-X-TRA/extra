<!DOCTYPE html>
<html>
<head>
	<title>Form Input Anggota</title>
</head>
<body>
@if(session('error'))
<div class="alert alert-error">
	{{ session('error') }}
</div>
@endif

@if(count($errors) > 0)
<div class="alert alert-danger">
	<strong>PERHATIAN</strong><br> 
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<h1>Form Anggota Ekskul</h1>
	<form action="{{ url('absensi/anggota', @$anggota->id) }}" method="POST">
	@csrf

	@if(!empty($anggota))
		@method('PATCH')
	@endif

	<br><label>Nama Lengkap</label>
	<input type="text" name="nama" value="{{ old('nama', @$anggota->nama) }}" />
	<br>Jenis Kelamin:<br>
			<input type="radio" name="jenis_kelamin" value="L" {{ old('jenis_kelamin', @$anggota->jenis_kelamin)=='L' ? 'checked' : '' }}/>L
			<input type="radio" name="jenis_kelamin" value="P" {{ old('jenis_kelamin', @$anggota->jenis_kelamin)=='P' ? 'checked' : '' }}/>P
			<br>
	Kelas:
	<div>
		<input type="text" name="kelas" value="{{ old('kelas', @$anggota->kelas) }}" />
	</div>
	<input class="btn btn-success" type="submit" value="Simpan"/>
</form>
</body>
</html>
