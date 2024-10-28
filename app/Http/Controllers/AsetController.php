<?php

namespace App\Http\Controllers;

use App\Helpers\CodeHelper;
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
        $simpan = Tbaset::create([
            'kode_aset' => $request->kode_aset,
            'nama_aset' => $request->nama_aset,
            'bahan' => $request->bahan,
            'merk' => $request->merk,
            'satuan' => $request->satuan,
            'harga' => $request->harga,
            'kondisi' => $request->kondisi,
            'lokasi_simpan' => $request->lokasi_simpan,
            'tgl_peroleh' => $request->tgl_peroleh,
            'keterangan' => $request->keterangan,
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
        $simpan = $aset->update([
            'kode_aset' => $request->kode_aset,
            'nama_aset' => $request->nama_aset,
            'bahan' => $request->bahan,
            'merk' => $request->merk,
            'satuan' => $request->satuan,
            'harga' => $request->harga,
            'kondisi' => $request->kondisi,
            'lokasi_simpan' => $request->lokasi_simpan,
            'tgl_peroleh' => $request->tgl_peroleh,
            'keterangan' => $request->keterangan,
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
