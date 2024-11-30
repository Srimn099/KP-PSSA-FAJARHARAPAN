<?php

namespace App\Http\Controllers;

use App\Models\Tbaset;
use App\Models\Tbpengelola;
use App\Models\Tbsiswa;
use App\Models\Tbtranskaksi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){
        $data['totalaset'] = Tbaset::count();
        $data['totalsiswa'] = Tbsiswa::count();
        $data['totalpengelola'] = Tbpengelola::count();
        $data['totaltransaksi'] = Tbtranskaksi::count();
        // $data['datatTransaksi'] = Tbtranskaksi::get();
        $transaksiPerBulan = [];
        // Looping melalui transaksi untuk mengelompokkan berdasarkan bulan
        foreach (Tbtranskaksi::get() as $transaksi) {
            // Ambil bulan dan tahun dari tanggal transaksi
            $bulanTahun = \Carbon\Carbon::parse($transaksi->tgl_trx)->format('Y-m'); // Format tahun-bulan

            // Inisialisasi nilai jika bulan tersebut belum ada dalam array
            if (!isset($transaksiPerBulan[$bulanTahun])) {
                $transaksiPerBulan[$bulanTahun] = [
                    'nominal' => 0,
                    'bulan' => \Carbon\Carbon::parse($transaksi->tgl_trx)->format('M-Y'), // Menyimpan bulan dalam format singkatan
                ];
            }

            // Tambahkan nominal transaksi ke bulan yang sesuai
            $transaksiPerBulan[$bulanTahun]['nominal'] += $transaksi->nominal_trx;
        }

        // Hasilkan array final yang hanya berisi data bulan dan total nominal transaksi
        $data['chartTransaksi'] = array_values($transaksiPerBulan);

        // Menampilkan hasil
        // return $data;
        return view('dashboard', $data);
    }
}
