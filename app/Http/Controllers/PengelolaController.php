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
    function edit(Tbpengelola $siswa){
        $data['list'] = $siswa;
        return view('pengelola.edit', $data);
    }
    function update(Request $request, Tbpengelola $siswa){

        if($request->foto != null){
            $hapusFile = Tbpengelola::handleDelete($request->foto);
            if($hapusFile){
                $simpan = $siswa->update([
                    'foto' => $siswa->handleUpload($request->foto),
                    'nama' => $request->nama,
                    'tmp_lahir' => $request->tmp_lahir,
                    'tgl_lahir' => $request->tgl_lahir,
                    'jk' => $request->jk,
                    'pendidikan_terakhir' => $request->pendidikan_terakhir,
                    'nama_ayah' => $request->nama_ayah,
                    'nama_ibu' => $request->nama_ibu,
                    'pk_ortu' => $request->pk_ortu,
                    'alamat' => $request->alamat,
                    'tgl_masuk' => $request->tgl_masuk,
                    'tgl_keluar' => $request->tgl_keluar,
                ]);
                if($simpan){
                    return redirect('siswa')->with('success', 'Data berhasil diupdate');
                }else{
                    return back()->with('error', 'Data gagal diupdate');
                }
            }else{
                return back()->with('error', 'Data gagal disimpan');
            }

        }else{
            $simpan = $siswa->update([
                'nama' => $request->nama,
                'tmp_lahir' => $request->tmp_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'jk' => $request->jk,
                'pendidikan_terakhir' => $request->pendidikan_terakhir,
                'nama_ayah' => $request->nama_ayah,
                'nama_ibu' => $request->nama_ibu,
                'pk_ortu' => $request->pk_ortu,
                'alamat' => $request->alamat,
                'tgl_masuk' => $request->tgl_masuk,
                'tgl_keluar' => $request->tgl_keluar,
            ]);
            if($simpan){
                return redirect('siswa')->with('success', 'Data berhasil diupdate');
            }else{
                return back()->with('error', 'Data gagal diupdate');
            }
        }



    }

    function delete($siswa){
        $data = Tbpengelola::find($siswa);

        $hapusFile = Tbpengelola::handleDelete($data->foto);
        if($hapusFile){
            $hapus = $data->delete();
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
