<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class CeklabController extends Controller
{
    public function DataCeklab(){
    	$petugas = DB::table('petugas')->get();
    	$pasien = DB::table('pasien')->get();
    	$ceklab = DB::table('ceklab')
            ->Join('petugas', 'ceklab.nip', '=', 'petugas.nip')
            ->get();

   	return view('data-ceklab/ceklab',['petugas' => $petugas,'pasien' => $pasien ,'ceklab' => $ceklab]);
   		
    }
    public function TambahCeklab(Request $request){
    	DB::table('ceklab')->insert([
    		'nm_pasien' => $request->nm_pasien,
    		'nip' => $request->nm_ptg,
    		'nm_ceklab' => $request->jenis,
    		'hasil_cek' => $request->hasil,
    		'ket' => $request->ket,
    		'harga' => $request->harga,
    		'no_layanan' => $request->no_layanan,
     	]);
     	return redirect('data-ceklab')->with('status','Data Ceklab Berhasil di masukkan');
    }
    
}
