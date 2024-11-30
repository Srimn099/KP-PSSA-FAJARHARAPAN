<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbsiswa;

class SiswaController extends Controller
{
    function index(){
        $data['list'] = Tbsiswa::orderBy('id', 'desc')->get();
        return view('siswa.index', $data);
    }
    function create(){
        return view('siswa.create');
    }
    function store(Request $request){
        $request->validate(Tbsiswa::$rules,Tbsiswa::$messages);
        $simpan = Tbsiswa::create([
            'foto' => Tbsiswa::handleUpload($request->foto),
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
            return redirect('siswa')->with('success', 'Data berhasil disimpan');
        }else{
            return back()->with('error', 'Data gagal disimpan');
        }
    }
    function edit(Tbsiswa $siswa){
        $data['list'] = $siswa;
        return view('siswa.edit', $data);
    }
    function update(Request $request, Tbsiswa $siswa){

        if($request->foto != null){
            $hapusFile = Tbsiswa::handleDelete($request->foto);
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
        $data = Tbsiswa::find($siswa);

        $hapusFile = Tbsiswa::handleDelete($data->foto);
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
