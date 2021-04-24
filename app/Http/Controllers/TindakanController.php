<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class TindakanController extends Controller
{
    public function DataTindakan(){
    	$tindakan =  DB::table('tindakan')->get();
    	return view('data-tindakan/tindakan',compact('tindakan'));
    }
    public function TambahTindakan(){
    	return view('data-tindakan/tambah');
    }
    public function ProsesTambah(Request $request){
    	DB::table('tindakan')->insert([
    		'nm_tnd' => $request->nm_tindakan,
    		'harga' => $request->harga,
    	]);
    	return redirect('data-tindakan')->with('status', 'Data tindakan berhasil ditambah');
    }
    public function EditTindakan($id){
    	$datatindakan= DB::table('tindakan')->where('id',$id)->first();
    	return view('data-tindakan/edit',compact('datatindakan'));
    }
    public function ProsesEdit(Request $request,$id){
    	DB::table('tindakan')->where('id',$id)->update([
    		'nm_tnd' => $request->nm_tindakan,
    		'harga' => $request->harga
    	]);
    	return redirect('data-tindakan')->with('status', 'Data tindakan berhasil di ubah');
    }
    public function HapusTindakan($id){
    	DB::table('tindakan')->where('id',$id)->delete();
    	return redirect('data-tindakan')->with('status', 'Data tindakan berhasil di Hapus');
    }
}
