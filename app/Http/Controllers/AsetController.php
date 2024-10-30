<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Tbaset;

class AsetController extends Controller
{
    function index(){
        $data['list'] = Tbaset::orderBy('id', 'desc')->get();

        return view('aset.index', $data);
    }
    function create(){
        $data['kode'] = Tbaset::kodeAset();
        return view('aset.create', $data);
    }
    function store(Request $request){


        $request->validate(Tbaset::$rules,Tbaset::$messages);
        $total = Tbaset::totalNoSatuan($request->total);
        // Log::info($total);
        $simpan = Tbaset::create([
            'kode_aset' => $request->kode_aset,
            'nama_aset' => $request->nama_aset,
            'bahan' => $request->bahan,
            'merk' => $request->merk,
            'satuan' => $request->satuan,
            'harga' => $request->harga,
            'qty' => $request->qty,
            'total' =>  $total,
            'kondisi' => $request->kondisi,
            'lokasi_simpan' => $request->lokasi_simpan,
            'tgl_peroleh' => $request->tgl_peroleh,
            'jenis_aset' => $request->jenis_aset,
            'keterangan' => $request->keterangan
        ]);

       if( $simpan){
           return redirect('aset')->with('success', 'Data berhasil disimpan');
       }else{
            return back()->with('error', 'Data gagal disimpan');
       }
    }
    function edit(Tbaset $aset){
        $data['list'] = $aset;
        return view('aset.edit', $data);
    }
    function update(Request $request, Tbaset $aset){
        $request->validate(Tbaset::$rules,Tbaset::$messages);
        $total = Tbaset::totalNoSatuan($request->total);
        $simpan = $aset->update([
            'kode_aset' => $request->kode_aset,
            'nama_aset' => $request->nama_aset,
            'bahan' => $request->bahan,
            'merk' => $request->merk,
            'satuan' => $request->satuan,
            'harga' => $request->harga,
            'qty' => $request->qty,
            'total' =>  $total,
            'kondisi' => $request->kondisi,
            'lokasi_simpan' => $request->lokasi_simpan,
            'tgl_peroleh' => $request->tgl_peroleh,
            'jenis_aset' => $request->jenis_aset,
            'keterangan' => $request->keterangan
        ]);

        if( $simpan){
            return redirect('aset')->with('success', 'Data berhasil diperbaharui');
        }else{
            return back()->with('error', 'Data gagal diperbaharui');
        }
    }

    function delete(Tbaset $aset){
        $simpan = $aset->delete();
        if( $simpan){
            return redirect('aset')->with('success', 'Data berhasil dihapus');
        }else{
            return back()->with('error', 'Data gagal dihapus');
        }
    }


}
