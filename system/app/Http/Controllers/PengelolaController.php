<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbpengelola;

class PengelolaController extends Controller
{
    function index(){
        $data['list'] = Tbpengelola::orderBy('id', 'desc')->get();
        return view('pengelola.index', $data);
    }
    function store(Request $request){
        $request->validate(Tbpengelola::$rules,Tbpengelola::$messages);
        $simpan = Tbpengelola::create([
            'foto' => Tbpengelola::handleUpload($request->foto),
            'no_ktp' => $request->no_ktp,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'usia' => $request->usia,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
        ]);

        if($simpan){
            return back()->with('success', 'Data berhasil disimpan');
        }else{
            return back()->with('error', 'Data gagal disimpan');
        }
    }
    function update(Request $request, Tbpengelola $pengelola){

        if($request->foto != null){
            $hapusFile = Tbpengelola::handleDelete($pengelola->foto);
            if($hapusFile){
                $simpan = $pengelola->update([
                    'foto' => Tbpengelola::handleUpload($request->foto),
                    'no_ktp' => $request->no_ktp,
                    'nama' => $request->nama,
                    'jk' => $request->jk,
                    'usia' => $request->usia,
                    'alamat' => $request->alamat,
                    'jabatan' => $request->jabatan,
                ]);
                if($simpan){
                    return back()->with('success', 'Data berhasil diupdate');
                }else{
                    return back()->with('error', 'Data gagal diupdate');
                }
            }else{
                return back()->with('error', 'Data gagal disimpan');
            }

        }else{
            $simpan = $pengelola->update([
                'no_ktp' => $request->no_ktp,
                'nama' => $request->nama,
                'jk' => $request->jk,
                'usia' => $request->usia,
                'alamat' => $request->alamat,
                'jabatan' => $request->jabatan,
            ]);
            if($simpan){
                return back()->with('success', 'Data berhasil diupdate');
            }else{
                return back()->with('error', 'Data gagal diupdate');
            }
        }

    }

    function delete(Tbpengelola $pengelola){

        $hapusFile = Tbpengelola::handleDelete($pengelola->foto);
        if($hapusFile){
            $hapus =  $pengelola->delete();
            if($hapus){
                return back()->with('success', 'Data berhasil dihapus');
            }else{
                return back()->with('error', 'Data gagal dihapus');
            }
        }else{
            return back()->with('error', 'Data gagal dihapus');
        }


    }
}
