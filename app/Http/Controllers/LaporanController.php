<?php

namespace App\Http\Controllers;

use App\Models\Tbtranskaksi;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    function lapkeuangan(){

    }
    function laptransaksi(Request $request){

        $request->validate([
            'tgl_mulai' => 'required',
            'tgl_akhir' => 'required',
        ],[
            'tgl_mulai.required' => 'Harap masukkan Tgl Mulai',
            'tgl_akhir.required' => 'Harap masukkan Tgl Akhir',
        ]);

        $tanggalMulai = $request->tgl_mulai;
        $tanggalSelesai = $request->tgl_akhir;

        $data['list'] = Tbtranskaksi::whereBetween('tgl_trx', [$tanggalMulai, $tanggalSelesai])->get();
        $data['tanggal'] = [
            'mulai' => $tanggalMulai,
            'selesai' => $tanggalSelesai,
        ];
        return $data;
        return view('laporan.laptransaksi',$data);
    }
}
