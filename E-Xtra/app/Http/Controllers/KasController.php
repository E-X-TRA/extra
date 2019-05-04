<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
		$data['uangKas'] = \App\Pertemuan::join('t_kas','t_kas.id_pertemuan','=','t_pertemuan.id')
        ->get();
        $data['totalKas'] = \App\Kas::get();
        
		return view('uangKas.berandaKas',$data); 
	}

	public function create(){
		$data['pertemuan'] = \App\Pertemuan::get();
        return view('uangKas.catatKas',$data);
    }

    public function store(Request $request){ 
    	$rule = [
    		'id_pertemuan' => 'required|numeric',
    		'jumlah_masuk' => 'required|numeric',
    	];
    	$this->validate($request,$rule);

    	$input = $request->all();
    	unset($input['_token']);
    	$status = \App\Kas::create($input);

    	if ($status) {
    		return redirect('/uangKas')->with('success','Data Berhasil Ditambahkan');
    	}else{
    		return redirect('/uangKas')->with('error','Data Gagal Ditambahkan');
    	}
    }

    public function destroy(Request $request, $id){
        $kas = \App\Kas::find($id);
    	$status = $kas->delete();

    	if ($status) {
    		return redirect('/uangKas')->with('success','Data Berhasil Dihapus');
    	}else{
    		return redirect('/uangKas')->with('error','Data Gagal Dihapus');
    	}

    }
}
