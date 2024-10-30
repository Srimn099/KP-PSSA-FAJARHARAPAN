<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tbposkeuangan extends Model
{
    protected $table = 'tb_pos_keuangan';
    protected $fillable = [
        'kode_pos',
        'nama_pos',
        'jenis_pos',
        'saldo_pos',
    ];
    static $rules = [
        'kode_pos' => 'required',
        'nama_pos' => 'required',
        'jenis_pos' => 'required',
        'saldo_pos' => 'required',
    ];
    static $messages = [
        'kode_pos.required' => 'Kode Aset wajib diisi',
        'nama_pos.required' => 'Nama Aset wajib diisi',
        'jenis_pos.required' => 'Jenis Pos Keuangan wajib dipilih',
        'saldo_pos.required' => 'Saldo Pos Keuangan wajib diisi',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public static function kodeKeuangan(){
        $latestEntry = self::latest()->first();
        $latestId = $latestEntry ? (int) Str::after($latestEntry->kode_pos, 'POS.') : 0;
        $nextId = str_pad($latestId + 1, 3, '0',
        STR_PAD_LEFT);
        $tanggalSekarang = date('Ymd');
        $kode = "POS.{$nextId}.{$tanggalSekarang}";
        return $kode;
    }

    public static function totalNoSatuan($nilai){
        return trim(preg_replace('/[^\d]/', '', $nilai));
    }



}
