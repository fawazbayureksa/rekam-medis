<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function DataPetugas(){
    	$petugas = DB::table('petugas')->get();
    	return view('data-petugas/petugas',compact('petugas'));
    }
    public function TambahPetugas(){
    	return view('data-petugas/tambah');
    }
    public function ProsesTambah(Request $request){
    	DB::table('petugas')->insert([
    		'nip' => $request->nip,
    		'nm_ptg' => $request->nama,
    		'alm_ptg' => $request->alm_ptg,
    		'jk_ptg' => $request->jk,
    		'tgl_lahir'=> $request->tgl_lahir,
    		'no_telp_ptg' => $request->no_telp,
    		'jabatan' => $request->jabatan,
    		'no_ijin_praktek' => $request->no_praktek,
    		'pass' => $request->pass,
    	]);
    	return redirect('data-petugas')->with('status', 'Data Petugas berhasil ditambah');
    }
    public function EditPetugas($id){
       $petugas = DB::table('petugas')->where('id',$id)->first();
        return view('data-petugas/edit', compact('petugas'));
    }
    public function ProsesEdit(Request $request,$id){
        DB::table('petugas')->where('id',$id)->update([
            'nm_ptg' => $request->nama,
            'alm_ptg' => $request->alm_ptg,
            'jk_ptg' => $request->jk,
            'tgl_lahir'=> $request->tgl_lahir,
            'no_telp_ptg' => $request->no_telp,
            'jabatan' => $request->jabatan,
            'no_ijin_praktek' => $request->no_praktek
        ]);
        return redirect('data-petugas')->with('status', 'Data Petugas berhasil di Ubah');
    }
    public function ProsesHapus($id){
        DB::table('petugas')->where('id',$id)->delete();
                return redirect('data-petugas')->with('status', 'Data Petugas berhasil di Hapus');

    }

}
