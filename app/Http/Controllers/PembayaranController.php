<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function DataPembayaran(){
        return view('data-pembayaran/pembayaran');
    }
}
