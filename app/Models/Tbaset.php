<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tbaset extends Model
{
    protected $table = 'tb_aset';
    protected $fillable = [
        'kode_aset',
        'nama_aset',
        'bahan',
        'merk',
        'satuan',
        'harga',
        'qty',
        'total',
        'kondisi',
        'lokasi_simpan',
        'tgl_peroleh',
        'jenis_aset',
        'keterangan',
    ];
    static $rules = [
        'kode_aset' => 'required',
        'nama_aset' => 'required',
        'bahan' => 'required',
        'merk' => 'required',
        'satuan' => 'required',
        'qty' => 'required',
        'harga' => 'required',
        'total' => 'required',
        'kondisi' => 'required',
        'lokasi_simpan' => 'required',
        'tgl_peroleh' => 'required',
        'jenis_aset' => 'required',
        'keterangan' => 'required'
    ];
    static $messages = [
        'kode_aset.required' => 'Kode Aset wajib diisi',
        'nama_aset.required' => 'Nama Aset wajib diisi',
        'bahan.required' => 'Bahan Aset wajib diisi',
        'merk.required' => 'Merk Aset wajib diisi',
        'satuan.required' => 'Satuan Aset wajib diisi',
        'qty.required' => 'Qty Aset wajib diisi',
        'harga.required' => 'Harga Aset wajib diisi',
        'total.required' => 'Total Aset wajib diisi',
        'kondisi.required' => 'Kondisi Aset wajib diisi',
        'lokasi_simpan.required' => 'Lokasi Simpan Aset wajib diisi',
        'tgl_peroleh.required' => 'Tgl Peroleh Aset wajib diisi',
        'jenis_aset.required' => 'Jenis Aset wajib diisi',
        'keterangan.required' => 'Keterangan Aset wajib diisi',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public static function kodeAset(){
        $latestEntry = self::latest()->first();
        $latestId = $latestEntry ? (int) Str::after($latestEntry->kode_aset, 'AST.') : 0;
        $nextId = str_pad($latestId + 1, 3, '0',
        STR_PAD_LEFT);
        $tanggalSekarang = date('Ymd');
        $kode = "AST.{$nextId}.{$tanggalSekarang}";
        return $kode;
    }

    public static function totalNoSatuan($nilai){
        return trim(preg_replace('/[^\d]/', '', $nilai));
    }



}
