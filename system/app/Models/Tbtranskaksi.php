<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Tbtranskaksi extends Model
{
    protected $table = 'tb_transaksi';
    protected $fillable = [
       'kode_trx',
       'kode_kategori',
       'jenis_trx',
       'jenis_akun',
       'nominal_trx',
       'tgl_trx',
       'keterangan_trx',
    ];
    static $rules = [
        'kode_trx' => 'required',
        'kode_kategori' => 'required',
        'jenis_trx' => 'required',
        'nominal_trx' => 'required',
        'saldo_trx' => 'required',
        'tgl_trx' => 'required',
        'keterangan_trx' => 'required',
    ];
    static $messages = [
        'kode_trx.required' => 'Kode transaksi wajib diisi',
        'kode_kategori.required' => 'Kode kategori wajib diisi',
        'jenis_trx.required' => 'Jenis transaksi wajib dipilih',
        'nominal_trx.required' => 'Nominal transaksi wajib diisi',
        'saldo_trx.required' => 'Saldo transaksi wajib diisi',
        'tgl_trx.required' => 'Tanggal transaksi wajib diisi',
        'keterangan_trx.required' => 'Keterangan transaksi wajib diisi',
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public static function kodeTransaksi(){
        $latestEntry = self::latest()->first();
        $latestId = $latestEntry ? (int) Str::after($latestEntry->kode_trx, 'TRX.') : 0;
        $nextId = str_pad($latestId + 1, 3, '0',
        STR_PAD_LEFT);
        $tanggalSekarang = date('Ymd');
        $kode = "TRX.{$nextId}.{$tanggalSekarang}";
        return $kode;
    }

    public static function totalNoSatuan($nilai){
        return trim(preg_replace('/[^\d]/', '', $nilai));
    }
    public static function tglIndo($tgl){
         // Mengubah string tanggal menjadi objek DateTime
         $date = new \DateTime($tgl);

         // Mendapatkan nama bulan dalam bahasa Indonesia
         $namaBulan = [
             1 => 'Januari',
             2 => 'Februari',
             3 => 'Maret',
             4 => 'April',
             5 => 'Mei',
             6 => 'Juni',
             7 => 'Juli',
             8 => 'Agustus',
             9 => 'September',
             10 => 'Oktober',
             11 => 'November',
             12 => 'Desember',
         ];

         // Mengambil hari, bulan, dan tahun
         $hari = $date->format('j'); // Hari tanpa leading zero
         $bulan = $namaBulan[(int)$date->format('n')]; // Nama bulan
         $tahun = $date->format('Y'); // Tahun

         // Mengembalikan format tanggal lengkap
         return "{$hari} {$bulan} {$tahun}";
    }

    function kategori(){
        return $this->belongsTo(Tbkategoritransaksi::class, 'kode_kategori', 'kode_kategori');
    }
    function history(){
        return $this->belongsTo(Tbhistorisaldotrx::class, 'kode_trx', 'kode_trx');
    }


}
