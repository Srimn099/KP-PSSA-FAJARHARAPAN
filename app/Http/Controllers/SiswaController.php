<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbposkeuangan;
use App\Models\Tbsiswa;

class PostkeuanganController extends Controller
{
    function index(){
        $data['list'] = Tbsiswa::orderBy('id', 'desc')->get();
        return view('siswa.index', $data);
    }
    function store(Request $request){
        $request->validate(Tbposkeuangan::$rules,Tbposkeuangan::$messages);
        $saldo = Tbposkeuangan::totalNoSatuan($request->saldo_pos);
        $simpan = Tbposkeuangan::create([
            'kode_pos' => $request->kode_pos,
            'nama_pos' => $request->nama_pos,
            'jenis_pos' => $request->jenis_pos,
            'saldo_pos' => $saldo,
        ]);

        if($simpan){
            return back()->with('success', 'Data berhasil disimpan');
        }else{
            return back()->with('error', 'Data gagal disimpan');
        }
    }
    function update(Request $request, Tbposkeuangan $poskeuangan){
        $request->validate(Tbposkeuangan::$rules,Tbposkeuangan::$messages);
        $saldo = Tbposkeuangan::totalNoSatuan($request->saldo_pos);
        $simpan = $poskeuangan->update([
            'nama_pos' => $request->nama_pos,
            'jenis_pos' => $request->jenis_pos,
            'saldo_pos' => $saldo,
        ]);

        if($simpan){
            return back()->with('success', 'Data berhasil disimpan');
        }else{
            return back()->with('error', 'Data gagal disimpan');
        }
    }

    function delete(Tbposkeuangan $poskeuangan){
        $simpan = $poskeuangan->delete();
        if( $simpan){
            return redirect('aset')->with('success', 'Data berhasil dihapus');
        }else{
            return back()->with('error', 'Data gagal dihapus');
        }
    }
}
