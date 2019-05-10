<!DOCTYPE html>
<html>
<head>
	<title>Form Anggota</title>
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<link rel="icon" href="{{ asset('img/logo.png') }}" >
<body style="background-color: #006494">

@extends('layouts.app')
@php
    function after ($ini, $inthat)
        {
            if (!is_bool(strpos($inthat, $ini)))
            return substr($inthat, strpos($inthat,$ini)+strlen($ini));
        };

        function after_last ($ini, $target)
        {
            if (!is_bool(strrevpos($target, $ini)))
            return substr($target, strrevpos($target, $ini)+strlen($ini));
        };

        function before ($ini, $target)
        {
            return substr($target, 0, strpos($target, $ini));
        };

        function before_last ($ini, $target)
        {
            return substr($target, 0, strrevpos($target, $ini));
        };

        function between ($ini, $itu, $target)
        {
            return before ($itu, after($ini, $target));
        };

        function between_last ($ini, $itu, $target)
        {
         return after_last($ini, before_last($itu, $target));
        };

    // use strrevpos function in case your php version does not include it
    function strrevpos($instr, $needle)
    {
        $rev_pos = strpos (strrev($instr), strrev($needle));
        if ($rev_pos===false) return false;
        else return strlen($instr) - $rev_pos - strlen($needle);
    };
@endphp
<div class="container">
        @section('content')
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
	<div class="row">
		<div class="col"></div>
        <div class="col-6 ">
            <div class="card text-left">
              <div class="card-body">
                <h4 class="card-title"><h1>Form Anggota Ekskul</h1></h4>
                <form action="{{ url('anggota', @$anggota->id) }}" method="POST" onsubmit="kelas.value = Tingkat.value + '-' + Jurusan.value + ' ' + Nomor_Kelas.value">
                        @csrf
                        @if(!empty($anggota))
                            @method('PATCH')
                        @endif
                        <div class="p-2">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', @$anggota->nama) }}" />
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label><br>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="jenis_kelamin" value="L" id="jenkelL" class="custom-control-input" {{ old('jenis_kelamin', @$anggota->jenis_kelamin)=='L' ? 'checked' : '' }}/>
                                    <label for="jenkelL" class="custom-control-label">L</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="jenis_kelamin" value="P" id="jenkelP" class="custom-control-input" {{ old('jenis_kelamin', @$anggota->jenis_kelamin)=='P' ? 'checked' : '' }}/>
                                    <label for="jenkelP" class="custom-control-label">P</label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="tingkat">Kelas</label><br>
                                    {{-- <input type="text" name="kelas" id="kelas" class="form-control" value="{{ old('kelas', @$anggota->kelas) }}" /> --}}
                                    <select name="Tingkat"  class="form-control" id="tingkat">
                                        <option value="X" {{ before('-',old('kelas', @$anggota->kelas))=='X' ? 'selected' : '' }}>X</option>
                                        <option value="XI" {{ before('-',old('kelas', @$anggota->kelas))=='XI' ? 'selected' : '' }}>XI</option>
                                        <option value="XII" {{ before('-',old('kelas', @$anggota->kelas))=='XII' ? 'selected' : '' }}>XII</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label for="jurusan">Jurusan</label>
                                            <select name="Jurusan" class="form-control" id="jurusan">
                                                <option value="AV" {{ between('-',' ',old('kelas', @$anggota->kelas))=='AV' ? 'selected' : '' }}>AV</option>
                                                <option value="MM" {{ between('-',' ',old('kelas', @$anggota->kelas))=='MM' ? 'selected' : '' }}>MM</option>
                                                <option value="RPL" {{ between('-',' ',old('kelas', @$anggota->kelas))=='RPL' ? 'selected' : '' }}>RPL</option>
                                                <option value="TITL" {{ between('-',' ',old('kelas', @$anggota->kelas))=='TITL' ? 'selected' : '' }}>TITL</option>
                                                <option value="TKJ" {{ between('-',' ',old('kelas', @$anggota->kelas))=='TKJ' ? 'selected' : '' }}>TKJ</option>
                                                <option value="TOI" {{ between('-',' ',old('kelas', @$anggota->kelas))=='TOI' ? 'selected' : '' }}>TOI</option>
                                            </select>
                                </div>
                                <div class="form-group col">
                                    <label for="Nomor_Kelas">Nomor Kelas</label>
                                    <input type="text" class="form-control" name="Nomor_Kelas" size="1" value="{{ after(' ',old('kelas', @$anggota->kelas))}}">
                                </div>
                            </div>
                        <input type="hidden" name="kelas" value=""></input>
                        </div>
                    <input class="btn btn-success p-2" type="submit" value="SIMPAN"/>
                    <a class="btn btn-warning" href="{{ url('/anggota') }}">BATAL</a>
                </form>
                </div>
            </div>
        </div>
		<div class="col"></div>
	</div>
</div>
@endsection
</body>
</html>
