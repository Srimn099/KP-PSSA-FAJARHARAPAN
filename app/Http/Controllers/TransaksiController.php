<?php

namespace App\Http\Controllers;

use App\Models\Tbtranskaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    function index(){
        $data['kode'] = Tbtranskaksi::kodeTransaksi();
        $data['list'] = Tbtranskaksi::orderBy('id', 'desc')->get();
        return view('transaksi.index', $data);
    }
}
