<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class AnggotaController extends Controller
{
    	//untuk CRUD anggota
    public function index(){
    	$today = Carbon::today();
    	$data['anggota'] = \App\Anggota::get();
    	return view('absensi.keanggotaan',$data);
    }

    public function create(){
    	return view('absensi.formAnggota');
    }

    public function store(Request $request){
    	$rule = [
    		'nama' => 'required|string',
    		'kelas' => 'required|string',
    		'jenis_kelamin' => 'required|string|size:1',
    	];
    	$this->validate($request,$rule);

    	$input = $request->all();
    	$status = \App\Anggota::create($input);

    	if ($status) {
    		return redirect('/anggota')->with('success','Data Berhasil Ditambahkan');
    	}else{
    		return redirect('/anggota/ubah')->with('error','Data Gagal Ditambahkan');
    	}
    }

    public function edit(Request $request, $id){
    	$data['anggota'] = \App\Anggota::find($id);
    	return view('absensi.formAnggota',$data);
    }
    
    public function update(Request $request, $id){
    	$rule = [
    		'nama' => 'required|string',
    		'kelas' => 'required|string',
    		'jenis_kelamin' => 'required|string|size:1',
    	];
    	$this->validate($request,$rule);

    	$input = $request->all();
        $anggota = \App\Anggota::find($id);
    	$status = $anggota->update($input);

    	if ($status) {
    		return redirect('/anggota')->with('success','Data Berhasil Diubah');
    	}else{
    		return redirect('/anggota/ubah')->with('error','Data Gagal Diubah');
    	}
    }
    
    public function destroy(Request $request, $id){
        $anggota = \App\Anggota::find($id);
    	$status = $anggota->delete();

    	if ($status) {
    		return redirect('/anggota')->with('success','Data Berhasil Dihapus');
    	}else{
    		return redirect('/anggota/ubah')->with('error','Data Gagal Dihapus');
    	}
    }
}
