<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Tbtranskaksi extends Model
{
    protected $table = 'tb_transaksi';
    protected $fillable = [
        'kode_trx',
        'jenis_trx',
        'nominal_trx',
        'saldo_trx',
        'tgl_trx',
        'keterangan_trx',
    ];
    static $rules = [
        'kode_trx' => 'required',
        'jenis_trx' => 'required',
        'nominal_trx' => 'required',
        'saldo_trx' => 'required',
        'tgl_trx' => 'required',
        'keterangan_trx' => 'required',
    ];
    static $messages = [
        'kode_trx.required' => 'Kode transaksi wajib diisi',
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
        $latestId = $latestEntry ? (int) Str::after($latestEntry->kode_pos, 'TRX.') : 0;
        $nextId = str_pad($latestId + 1, 3, '0',
        STR_PAD_LEFT);
        $tanggalSekarang = date('Ymd');
        $kode = "TRX.{$nextId}.{$tanggalSekarang}";
        return $kode;
    }

    public static function totalNoSatuan($nilai){
        return trim(preg_replace('/[^\d]/', '', $nilai));
    }
}
