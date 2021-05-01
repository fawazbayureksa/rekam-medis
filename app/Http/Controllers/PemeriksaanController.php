<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PemeriksaanController extends Controller
{
    public function DataPemeriksaan(){
    	$pasien = DB::table('pasien')->get();
    	$dokter = DB::table('petugas')->where('jabatan','Dokter')->get();
    	$obat = DB::table('obat')->get();
    	return view('data-pemeriksaan/pemeriksaan', ['pasien' => $pasien,'dokter'=>$dokter,'obat' => $obat]);
    }
}
