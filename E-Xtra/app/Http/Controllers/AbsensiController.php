<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class AbsensiController extends Controller
{
	public function index(){
		$data['kehadiran'] = \DB::table('t_kehadiran')
        ->join('t_anggota','t_kehadiran.nik','=','t_anggota.nik')
        ->get();
		return view('absensi.kehadiran',$data); 
	}
        //untuk CRUD mengabsen
    public function indexAbsen(){
    	$data['absen'] = \DB::table('t_anggota')->get();
    	return view('absensi.formAbsen',$data);
    }

    public function storeAbsen(Request $request){
    	$input = $request->all();

    	$nik = $request->input('nik.*');
    	$tanggal = $request->input('tanggal.*');
    	$hadir = $request->input('kehadiran.*');


    	unset($input['_token']);
        for ($i=0; $i <= sizeof($input); $i++) { 
            $status = \DB::table('t_kehadiran')->insert([
            ['nik' => $nik[$i],'kehadiran' => $hadir[$i],'tanggal' => $tanggal[$i]]
        ]);
        }
    	
        // $status = \DB::table('t_kehadiran')->insert($data);

    	if ($status) {
    		return redirect('/absensi/mengabsen')->with('success','Data Berhasil Ditambahkan');
    	}else{
    		return redirect('/absensi/mengabsen')->with('error','Data Gagal Ditambahkan');
    	}
    }
}
