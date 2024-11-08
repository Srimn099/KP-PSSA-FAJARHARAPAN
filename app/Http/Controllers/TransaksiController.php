<?php

namespace App\Http\Controllers;

use App\Models\Tbtranskaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    function index()
    {
        $data['kode'] = Tbtranskaksi::kodeTransaksi();
        $data['list'] = Tbtranskaksi::orderBy('id', 'desc')->get();
        return view('transaksi.index', $data);
    }
    function store(Request $request)
    {
        $request->validate(Tbtranskaksi::$rules, Tbtranskaksi::$messages);
        $nominal_trx = Tbtranskaksi::totalNoSatuan($request->nominal_trx);
        $saldo_trx = Tbtranskaksi::totalNoSatuan($request->saldo_trx);
        $simpan = Tbtranskaksi::create([
            "kode_trx" => $request->kode_trx,
            "keterangan_trx" => $request->keterangan_trx,
            "jenis_trx" => $request->jenis_trx,
            "nominal_trx" => $nominal_trx,
            "saldo_trx" => $saldo_trx,
            "tgl_trx" => $request->tgl_trx,
        ]);

        if ($simpan) {
            return back()->with('success', 'Data berhasil disimpan');
        } else {
            return back()->with('error', 'Data gagal disimpan');
        }
    }
    function update(Request $request, Tbtranskaksi $transaksi)
    {
        $request->validate(Tbtranskaksi::$rules, Tbtranskaksi::$messages);
        $nominal_trx = Tbtranskaksi::totalNoSatuan($request->nominal_trx);
        $saldo_trx = Tbtranskaksi::totalNoSatuan($request->saldo_trx);
        $simpan = $transaksi->update([
            "kode_trx" => $request->kode_trx,
            "keterangan_trx" => $request->keterangan_trx,
            "jenis_trx" => $request->jenis_trx,
            "nominal_trx" => $nominal_trx,
            "saldo_trx" => $saldo_trx,
            "tgl_trx" => $request->tgl_trx,
        ]);

        if ($simpan) {
            return back()->with('success', 'Data berhasil diupdate');
        } else {
            return back()->with('error', 'Data gagal diupdate');
        }
    }
    function delete(Tbtranskaksi $transaksi)
    {
        $simpan = $transaksi->delete();

        if ($simpan) {
            return back()->with('success', 'Data berhasil dihapus');
        } else {
            return back()->with('error', 'Data gagal dihapus');
        }
    }
}
