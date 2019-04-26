<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class AbsensiController extends Controller
{   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('absensi.berandaAbsensi'); 
    }

	public function indexRekapan($id){
        $idPertemuan = \DB::table('t_pertemuan')->where('id',$id)->value('id');
		$data['kehadiran'] = \DB::table('t_kehadiran')
        ->join('t_anggota','t_kehadiran.id_anggota','=','t_anggota.id')
        ->join('t_pertemuan','t_kehadiran.id_pertemuan','=','t_pertemuan.id')
        ->where('id_pertemuan',$idPertemuan)
        ->get();
		return view('absensi.kehadiran',$data); 
	}
        //untuk CRUD mengabsen
    public function indexAbsen(){
    	$data['absen'] = \App\Anggota::get();
        $data['pertemuan'] = \App\Pertemuan::max('id');
    	return view('absensi.formAbsen',$data);
    }

    public function storeAbsen(Request $request){
    	$input = $request->all();

    	$id = $request->input('id.*');
    	$hadir = $request->input('kehadiran.*');
        $pertemuan = $request->input('id_pertemuan');


        unset($input['_token']);
        for ($i=0; $i < sizeof($input); $i++) { 
            $status = \DB::table('t_kehadiran')->insert([
            ['id' => NULL,'id_pertemuan' => $pertemuan,'id_anggota' => $id[$i],'kehadiran' => $hadir[$i]]
        ]);
        }
    	
        // $status = \DB::table('t_kehadiran')->insert($data);

    	if ($status) {
    		return redirect('/absensi')->with('success','Data Berhasil Ditambahkan');
    	}else{
    		return redirect('/absensi/mengabsen')->with('error','Data Gagal Ditambahkan');
    	}
    }
}
