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

   function liveSearch(Request $request){
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = \App\Pertemuan::where('kegiatan', 'like', '%'.$query.'%')
         ->orWhere('tanggal', 'like', '%'.$query.'%')
         ->get(); 
      }
      else
      {
       $data = \App\Pertemuan::get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
        <td>'.$row->tanggal.'</td>
        <td>'.$row->kegiatan.'</td>
        <td>
            <a class="btn btn-secondary" href="'.url('/absensi/rekapan/pertemuan',$row->id) .'">DETAIL</a>
        </td>
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
