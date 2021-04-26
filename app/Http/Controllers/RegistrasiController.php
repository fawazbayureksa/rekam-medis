<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
   
    public function DataPasien(){
    	$pasien = DB::table('pasien')->get();
    	$regis = DB::table('registrasi')->get();
    	return view('data-registrasi/registrasi',compact('pasien'),compact('regis'));
    }
    public function TambahRegistrasi(Request $request){
    	DB::table('registrasi')->insert([
    		'no_regis' => $request->no_regis,
    		'nm_pasien' => $request->nm_pasien,
    	]);
    		return redirect('data-registrasi')->with('status','No Registrasi Berhasil ditambah');
    }

}
