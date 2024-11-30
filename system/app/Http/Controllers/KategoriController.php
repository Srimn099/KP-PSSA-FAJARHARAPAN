<?php

namespace App\Http\Controllers;

use App\Models\Tbhistorisaldotrx;
use Carbon\Carbon;
use App\Models\Tbkategoritransaksi;
use App\Models\Tbtranskaksi;
use Illuminate\Http\Request;

class KategoriController extends Controller
{

    function index(){
        $data['kode'] = Tbkategoritransaksi::kodeKategori();
        $data['list'] = Tbkategoritransaksi::orderBy('id', 'desc')->get();

        return view('kategori.index', $data);
    }

    function store(Request $request){


        $request->validate(Tbkategoritransaksi::$rules,Tbkategoritransaksi::$messages);
        $saldo = Tbkategoritransaksi::totalNoSatuan($request->saldo_awal);
        $tglAwal = Carbon::parse($request->tgl_awal);
        $tglAkhir = Carbon::parse($request->tgl_akhir);
        $list['listData'] = Tbkategoritransaksi::whereBetween('tgl_awal', [$tglAwal, $tglAkhir])
                            ->where('jenis_kategori', $request->jenis_kategori)
                            ->orderBy('id', 'desc')
                            ->get();


        if ($list['listData']->isNotEmpty()) {
            return back()->with('error', 'Saldo untuk jenis akun ini masih ada !');
        } else {
            $simpan = Tbkategoritransaksi::create([
                "kode_kategori" => $request->kode_kategori,
                "jenis_kategori" => $request->jenis_kategori,
                "saldo_awal" => $saldo,
                "tgl_awal" => $request->tgl_awal,
                "tgl_akhir" => $request->tgl_akhir,
            ]);

            if ($simpan) {
                return back()->with('success', 'Data berhasil disimpan');
            } else {
                return back()->with('error', 'Data gagal disimpan');
            }
        }
    }
    function update(Request $request, Tbkategoritransaksi $kategori){


        $cekHistory = Tbhistorisaldotrx::where('kode_kategori', $kategori->kode_kategori)->first();

        if($cekHistory){
            return back()->with('error', 'Data tidak dapat diubah karena terdapat historial transaksi');
        }else{

            $saldo = Tbkategoritransaksi::totalNoSatuan($request->saldo_awals);
            $updateData = $kategori->update([
                "kode_kategori" => $request->kode_kategori,
                "jenis_kategori" => $request->jenis_kategori,
                "saldo_awal" => $saldo,
                "tgl_awal" => $request->tgl_awal,
                "tgl_akhir" => $request->tgl_akhir,
            ]);

            if ($updateData) {
                return back()->with('success', 'Data berhasil diupdate');
            } else {
                return back()->with('error', 'Data gagal diupdate');
            }
        }


    }
    function delete(Tbkategoritransaksi $kategori)
    {

        $cekTransaksi = Tbtranskaksi::where('kode_kategori', $kategori->kode_kategori)->delete();
        $cekHistory = Tbhistorisaldotrx::where('kode_kategori', $kategori->kode_kategori)->delete();

        $simpan = $kategori->delete();

        if ($simpan) {

            return back()->with('success', 'Data berhasil dihapus');
        } else {
            return back()->with('error', 'Data gagal dihapus');
        }
    }
}
