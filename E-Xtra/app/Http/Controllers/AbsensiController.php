<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsensiController extends Controller
{
		//untuk CRUD anggota
    public function index(){
    	$data['anggota'] = \DB::table('t_anggota')->get();
    	return view('absensi.berandaAbsensi',$data);
    }

    public function create(){
    	return view('absensi.formAnggota');
    }

    public function store(Request $request){
    	$rule = [
    		'nik' => 'required|numeric|unique:t_anggota,nik',
    		'nama' => 'required|string',
    		'kelas' => 'required|string',
    		'jenis_kelamin' => 'required|string|size:1',
    	];
    	$this->validate($request,$rule);

    	$input = $request->all();
    	unset($input['_token']);
    	$status = \DB::table('t_anggota')->insert($input);

    	if ($status) {
    		return redirect('/absensi')->with('success','Data Berhasil Ditambahkan');
    	}else{
    		return redirect('/absensi/ubah')->with('error','Data Gagal Ditambahkan');
    	}
    }

    public function edit(Request $request, $id){
    	$data['anggota'] = \DB::table('t_anggota')->find($id);
    	return view('absensi.formAnggota',$data);
    }
    
    public function update(Request $request, $id){
    	$rule = [
    		'nik' => 'required|numeric',
    		'nama' => 'required|string',
    		'kelas' => 'required|string',
    		'jenis_kelamin' => 'required|string|size:1',
    	];
    	$this->validate($request,$rule);

    	$input = $request->all();
    	unset($input['_token']);
    	unset($input['_method']);
    	$status = \DB::table('t_anggota')->where('id',$id)->update($input);

    	if ($status) {
    		return redirect('/absensi')->with('success','Data Berhasil Diubah');
    	}else{
    		return redirect('/absensi/ubah')->with('error','Data Gagal Diubah');
    	}
    }
    
    public function destroy(Request $request, $id){
    	$status = \DB::table('t_anggota')->where('id',$id)->delete();

    	if ($status) {
    		return redirect('/absensi')->with('success','Data Berhasil Dihapus');
    	}else{
    		return redirect('/absensi/ubah')->with('error','Data Gagal Dihapus');
    	}
    }

    //untuk CRUD mengabsen
    public function indexAbsen(){
    	$data['absen'] = \DB::table('t_anggota')->get();
    	return view('absensi.formAbsen',$data);
    }
}
