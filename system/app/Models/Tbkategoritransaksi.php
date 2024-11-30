<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tbkategoritransaksi extends Model
{
    protected $table = 'tb_kategori_transaksi';
    protected $fillable = [
       'kode_kategori',
       'jenis_kategori',

       'saldo_awal',
       'tgl_awal',
       'tgl_akhir',
    ];

    static $rules = [
        'kode_kategori' => 'required',
        'jenis_kategori' => 'required',

        'saldo_awal' => 'required',
        'tgl_awal' => 'required',
        'tgl_akhir' => 'required',
    ];
    static $messages = [
        'kode_kategori.required' => 'Kode Kategori wajib diisi',
        'jenis_kategori.required' => 'Jenis Kategori wajib dipilih',

        'saldo_awal.required' => 'Saldo Awal wajib diisi',
        'tgl_awal.required' => 'Tanggal Awal saldo wajib diisi',
        'tgl_akhir.required' => 'Tanggal Akhir saldo wajib diisi',
    ];

    public static function kodeKategori(){
        $latestEntry = self::latest()->first();
        $latestId = $latestEntry ? (int) Str::after($latestEntry->kode_kategori, 'KAT.') : 0;
        $nextId = str_pad($latestId + 1, 3, '0',
        STR_PAD_LEFT);
        $tanggalSekarang = date('Ymd');
        $kode = "KAT.{$nextId}.{$tanggalSekarang}";
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

   protected $hidden = [
    'created_at',
    'updated_at'
];
}
