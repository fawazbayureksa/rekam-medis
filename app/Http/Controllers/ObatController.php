<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function DataObat(){

    	$obat = DB::table('obat')->get();
    	return view('data-obat/obat',['obat' => $obat]);
    	// return $obat;
    }
    public function TambahObat(){
    	
    	return view('data-obat/tambah');
    }
    public function ProsesTambah(Request $request){

	    DB::table('obat')->insert([
	    'nm_obat' => $request->nm_obat,
	    'harga' => $request->harga,
	]);

	    return redirect('data-obat')->with('status', 'Data obat berhasil ditambah');
    }
    public function EditObat($id){
        $dataobat =DB::table('obat')->where('id', $id)->first();
        return view('data-obat/edit',compact('dataobat'));
        // dd($dataobat);
    }
    public function ProsesEdit(Request $request, $id){

              DB::table('obat')->where('id', $id)
              ->update(['nm_obat' => $request->nm_obat,'harga' => $request->harga]);

            return redirect('data-obat')->with('status', 'Data obat berhasil diubah');
            // dd($request->nm_obat);

    }
    public function ProsesHapus($id){

    DB::table('obat')->where('id', $id)->delete();
     return redirect('data-obat')->with('status', 'Data obat berhasil dihapus');
    }
}
