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
        $data['anggota'] = \App\Anggota::get();
        $data['pertemuan'] = \App\Pertemuan::get();
        return view('absensi.berandaAbsensi',$data); 
    }

	public function indexRekapan($id){
        $data['idPertemuan'] = \App\Pertemuan::where('id',$id)->value('id');
        $data['namaKegiatan'] = \App\Pertemuan::where('id',$id)->value('kegiatan');
		$data['kehadiran'] = \App\Kehadiran::join('t_anggota','t_kehadiran.id_anggota','=','t_anggota.id')
        ->join('t_pertemuan','t_kehadiran.id_pertemuan','=','t_pertemuan.id')
        ->where('id_pertemuan',$id)
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
        $rule = [
            'id_pertemuan' => 'required',
            'id' => 'required',
            'tanggal' => 'required',
            'kehadiran' => 'required',
        ];
        $this->validate($request,$rule);

    	$input = $request->all();

    	$id = $request->input('id.*');
    	$hadir = $request->input('kehadiran.*');
        $pertemuan = $request->input('id_pertemuan');

        unset($input['_token']);
        
        for ($i=0; $i < sizeof($id); $i++) { 
            $status = \App\Kehadiran::insert([
            ['id' => NULL,'id_pertemuan' => $pertemuan,'id_anggota' => $id[$i],'kehadiran' => $hadir[$i]]
        ]);
        }

    	if ($status) {
    		return redirect('/absensi')->with('success','Data Berhasil Ditambahkan');
    	}else{
    		return redirect('/absensi/mengabsen')->with('error','Data Gagal Ditambahkan');
    	}
    } 

    public function destroyRekap(Request $request,$id){
        $absensi = \App\Pertemuan::find($id);
        $status = $absensi->delete();

        if ($status) {
            return redirect('/absensi/rekapan/pertemuan')->with('success','Data Berhasil Dihapus');
        }else{
            return redirect('/absensi/rekapan/pertemuan')->with('error','Data Gagal Dihapus');
        }
    }

    function liveSearch(Request $request,$id)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = \App\Kehadiran::join('t_anggota','t_kehadiran.id_anggota','=','t_anggota.id')
         ->join('t_pertemuan','t_kehadiran.id_pertemuan','=','t_pertemuan.id')
         ->where('id_pertemuan',$id)
         ->where('nama', 'like', '%'.$query.'%')
         ->get();
         
      }
      else
      {
       $data = \App\Kehadiran::join('t_anggota','t_kehadiran.id_anggota','=','t_anggota.id')
        ->join('t_pertemuan','t_kehadiran.id_pertemuan','=','t_pertemuan.id')
        ->where('id_pertemuan',$id)
        ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
            <td>'.$data->nama.'</td>
            <td>'.strtoupper($data->kehadiran).'</td>
            <td>'.$data->tanggal.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
