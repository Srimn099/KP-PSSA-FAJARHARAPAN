<?php

namespace App\Http\Controllers;

use App\Models\Tbkategoritransaksi;
use App\Models\Tbsiswa;
use App\Models\Tbtranskaksi;
use Illuminate\Http\Request;

class LaporanController extends Controller
{

    function laptransaksi(Request $request){

        $data['list'] = Tbtranskaksi::get();
        $data['kategori'] = Tbkategoritransaksi::
                            groupBy('jenis_kategori')
                            ->get();
        // return $data;
        return view('laporan.laptransaksi',$data);
    }

    function transaksiCetak(Request $req){
        $dari =  $req->dari;
        $sampai =  $req->sampai;
        $jenis =  $req->newselect;

        $data['list'] = Tbtranskaksi::with(['kategori','history'])
                        ->whereBetween('tgl_trx', [$dari, $sampai]) // Pastikan 'tanggal' adalah kolom yang sesuai
                        ->where('jenis_akun', '=', $jenis)
                        ->get();

        $data['map_list'] = $data['list']->map(function($item, $key) use ($dari, $sampai){
            return [
                'tanggal' => $item->tgl_trx,
                'keterangan' => $item->keterangan_trx,
                'debet' => $item->jenis_trx == 'DEBET' ? $item->nominal_trx : '-',
                'kredit' => $item->jenis_trx == 'KREDIT' ? $item->nominal_trx : '-',
                'saldo_awal' => $item->kategori->saldo_awal,
                'saldo_akhir' => $item->history->saldo,
                'lap_tglmulai' => $dari,
                'lap_tglakhir' => $sampai,
            ];
        });
        // return $data['map_list'];

        return view('laporan.cetaklaporantrx', $data);
    }


    function laprapb(){
        $data['datas'] = Tbtranskaksi::with(['kategori','history'])->get();

        $data['list'] = $data['list'] = $data['datas']->map(function($item) {
            $anggaran = $item->kategori->saldo_awal;
            $realisasi = $item->history->kredit;

            // Initialize percentage
            $persentase = 0;

            // Check if $realisasi is not zero to avoid division by zero
            if ($realisasi != 0) {
                $persentase = round(($anggaran / $realisasi) * 100, 2);
            }

            return [
                'kode' => $item->kode_trx,
                'deskripsi' => $item->keterangan_trx,
                'anggaran' => $anggaran,
                'realisasi' => $realisasi,
                'selisih' => $anggaran - $realisasi,
                'persentase' => $persentase,
            ];
        });
        // return $data['list'];
        return view('laporan.laprapb', $data);
    }

    function cetakLaprapb(Request $req){
        $dari =  $req->dari;
        $sampai =  $req->sampai;

        $data['datas'] = Tbtranskaksi::with(['kategori','history'])
                        ->whereBetween('tgl_trx', [$dari, $sampai]) // Pastikan 'tanggal' adalah kolom yang sesuai
                        ->get();

        $data['list'] = $data['list'] = $data['datas']->map(function($item) use ($dari, $sampai) {
            $anggaran = $item->kategori->saldo_awal;
            $realisasi = $item->history->kredit;

            // Initialize percentage
            $persentase = 0;

            // Check if $realisasi is not zero to avoid division by zero
            if ($realisasi != 0) {
                $persentase = round(($anggaran / $realisasi) * 100, 2);
            }

            return [
                'dari' => $dari,
                'sampai' => $sampai,
                'kode' => $item->kode_trx,
                'deskripsi' => $item->keterangan_trx,
                'anggaran' => $anggaran,
                'realisasi' => $realisasi,
                'selisih' => $anggaran - $realisasi,
                'persentase' => $persentase,
            ];
        });


        return view('laporan.cetaklaprapb', $data);
    }


    function cetaksiswa(){
        $data['list'] = Tbsiswa::get();

        return view('laporan.cetaksiswa', $data);
    }
}
