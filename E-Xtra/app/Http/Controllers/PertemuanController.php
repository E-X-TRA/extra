<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertemuanController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
    	$data['pertemuan'] = \App\Pertemuan::get();
    	return view('absensi.rekapan',$data);
    }

    public function create(){
    	return view('absensi.formPertemuan');
    }

    public function store(Request $request){
    	$rule = [
    		'kegiatan' => 'required|string|max:45',
    		'tanggal' => 'required|date'
    	];
    	$this->validate($request,$rule);

    	$input = $request->all();

    	$status = \App\Pertemuan::create($input);

    	if ($status) {
    		return redirect('/absensi/mengabsen')->with('success','Data Berhasil Ditambahkan');
    	}else{
    		return redirect('/absensi')->with('error','Data Gagal Ditambahkan');
    	}
    }
}
