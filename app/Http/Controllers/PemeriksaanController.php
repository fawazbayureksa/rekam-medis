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
    	$pemeriksaan = DB::table('pemeriksaan')
    	->join('pasien','pemeriksaan.id_pasien','=','pasien.id')
    	->join('petugas','pemeriksaan.id_dokter','=','petugas.id')
    	->join('obat','pemeriksaan.id_obat','=','obat.id')
    	->get();
    	return view('data-pemeriksaan/pemeriksaan', ['pasien' => $pasien,'dokter'=>$dokter,'obat' => $obat,'pemeriksaan'=> $pemeriksaan]);
    }
    public function TambahPemeriksaan(Request $request){
    	DB::table('pemeriksaan')->insert([
    		'no_rawat' => $request->norawat,
    		'id_pasien' => $request->nm_pasien,
    		'id_dokter' => $request->nm_dokter,
    		'id_obat' => $request->nm_obat,
    		'diagnosa' => $request->diagnosa,
    		'berat_badan' => $request->berat,
    		'tensi' => $request->tensi,
    		'suhu_tubuh' => $request->suhu,
    		'ket' => $request->ket,
    	]);
    	 return redirect('data-pemeriksaan')->with('status', 'Data Pemereksiaan berhasil ditambah');
    }

}
