<?php

namespace App\Http\Controllers;

use App\Models\Tbhistorisaldotrx;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Tbkategoritransaksi;
use App\Models\Tbtranskaksi;

class TransaksiController extends Controller
{
    // function Index
    function index(){
        $tanggalSekarang = Carbon::now();
        $data['kode'] = Tbtranskaksi::kodeTransaksi();
        $data['kategori'] = Tbkategoritransaksi::where('tgl_akhir', '>=', $tanggalSekarang)
                            ->orderBy('id', 'desc')
                            ->get();
        // return $data['kategori'];
        $data['list'] = Tbtranskaksi::with(['kategori','history'])->orderBy('id', 'desc')->get();
        // return $data['list'];

        return view('transaksi.index', $data);
    }

    // function Create
    function create(){
        $tanggalSekarang = Carbon::now();
        $data['kode'] = Tbtranskaksi::kodeTransaksi();
        $data['kategori'] = Tbkategoritransaksi::where('tgl_akhir', '>=', $tanggalSekarang)
                            ->orderBy('id', 'desc')
                            ->get();
        return view('transaksi.create', $data);
    }

    // function Store
    function store(Request $request){


        // $request->validate(Tbtranskaksi::$rules, Tbtranskaksi::$messages);
        $nominal_trx = Tbtranskaksi::totalNoSatuan($request->nominal_trx);

        // Cek saldo
        $kat = Tbkategoritransaksi::where('kode_kategori', '=', $request->kode_kategori)->first();
        $saldo = $kat->saldo_awal;


        if($request->jenis_trx == 'DEBET'){
            Tbhistorisaldotrx::create([
                "kode_kategori" => $request->kode_kategori,
                "kode_trx" => $request->kode_trx,
                "debet" => $nominal_trx,
                "kredit" => 0,
                "saldo" => $saldo + $nominal_trx,
            ]);

        }else if($request->jenis_trx == 'KREDIT'){
            Tbhistorisaldotrx::create([
                "kode_kategori" => $request->kode_kategori,
                "kode_trx" => $request->kode_trx,
                "debet" => 0,
                "kredit" => $nominal_trx,
                "saldo" => $saldo - $nominal_trx,
            ]);
        }else if($request->jenis_trx == ''){
            Tbhistorisaldotrx::create([
                "kode_kategori" => $request->kode_kategori,
                "kode_trx" => $request->kode_trx,
                "debet" => 0,
                "kredit" => 0,
                "saldo" => $saldo - $nominal_trx,
            ]);
        }
        $simpanTrx = Tbtranskaksi::create([
            "kode_trx" => $request->kode_trx,
            "kode_kategori" => $request->kode_kategori,
            "jenis_trx" => $request->jenis_trx,
            "jenis_akun" => $request->newselect,
            "nominal_trx" => $nominal_trx,
            "tgl_trx" => $request->tgl_trx,
            "keterangan_trx" => $request->keterangan_trx,
        ]);
        if($simpanTrx){
            return redirect('transaksi')->with('success', 'Data berhasil disimpan');
        } else {
            return back()->with('error', 'Data gagal disimpan');
        }

    }

    // function Edit
    function edit(Tbtranskaksi $transaksi){
        $tanggalSekarang = Carbon::now();
        $data['kode'] = Tbtranskaksi::kodeTransaksi();
        $data['kategori'] = Tbkategoritransaksi::where('tgl_akhir', '>=', $tanggalSekarang)
                            ->orderBy('id', 'desc')
                            ->get();
        $data['list'] = $transaksi;
        return view('transaksi.edit', $data);
    }

    function update(Request $request, Tbtranskaksi $transaksi){
        return $request;
    }

    // function Delete
    function delete(Tbtranskaksi $transaksi){
        $simpan = $transaksi->delete();

        if ($simpan) {
            return back()->with('success', 'Data berhasil dihapus');
        } else {
            return back()->with('error', 'Data gagal dihapus');
        }
    }

    // function get Kategori
    function getDataKategori($id){
        $dataKategori = Tbkategoritransaksi::where('id', $id)->first();
        return response()->json($dataKategori);
    }

}
