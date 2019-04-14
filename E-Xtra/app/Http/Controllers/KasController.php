<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasController extends Controller
{
    public function index(){
		$data['uangKas'] = \DB::table('t_kas')
        ->get();
		return view('uangKas.berandaKas',$data); 
	}
}
