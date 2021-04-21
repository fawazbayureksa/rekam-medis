<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PasienController extends Controller
{
	public function DataPasien(){
    $pasien = DB::table('pasien')->get();
    return view('data-pasien/pasien',['pasien'=> $pasien]);

	} 
	public function TambahPasien(){
		return view('data-pasien/tambah');
	}
	public function ProsesTambah(Request $request){
		DB::table('pasien')->insert([
			'no_klinik' => $request->noklinik,
			'alm_pasien' => $request->alm_pasien,
			'jk_pasien'=> $request->gender,
			'tgl_lahir_pasien' => $request->tgl_lahir,
			'no_telp_pasien'=> $request->no_telp,
			'umur' => $request->umur,
		]);
		return redirect('data-pasien')->with('status', 'Data Pasien berhasil ditambah');
	}
	public function EditPasien($id){
		$pasien=DB::table('pasien')->where('id',$id)->first();
		return view('data-pasien/edit',compact('pasien'));
	}
	public function ProsesEdit(Request $request,$id){
		DB::table('pasien')->where('id',$id)

		->update(['no_klinik' =>$request->noklinik,
			'alm_pasien' => $request->alm_pasien,
			'jk_pasien'=> $request->gender,
			'tgl_lahir_pasien' => $request->tgl_lahir,
			'no_telp_pasien'=> $request->no_telp,
			'umur' => $request->umur
		]);
		// dd($request);
		return redirect('data-pasien')->with('status', 'Data Pasien berhasil di ubah');
	}
	public function ProsesHapus($id){
		DB::table('pasien')->where('id',$id)->delete();
		return redirect('data-pasien')->with('status', 'Data Pasien berhasil di hapus');
	}
}
