<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
        'kondisi',
        'lokasi_simpan',
        'tgl_peroleh',
        'keterangan'
    ];
    static $rules = [
        'kode_aset' => 'required',
        'nama_aset' => 'required',
        'bahan' => 'required',
        'merk' => 'required',
        'satuan' => 'required',
        'harga' => 'required',
        'kondisi' => 'required',
        'lokasi_simpan' => 'required',
        'tgl_peroleh' => 'required',
        'keterangan' => 'required'
    ];
    static $messages = [
        'kode_aset.required' => 'Kode Aset wajib diisi',
        'nama_aset.required' => 'Nama Aset wajib diisi',
        'bahan.required' => 'Bahan wajib diisi',
        'merk.required' => 'Merk wajib diisi',
        'satuan.required' => 'Satuan wajib diisi',
        'harga.required' => 'Harga wajib diisi',
        'kondisi.required' => 'Kondisi wajib diisi',
        'lokasi_simpan.required' => 'Lokasi Simpan wajib diisi',
        'tgl_peroleh.required' => 'Tgl Peroleh wajib diisi',
        'keterangan.required' => 'Keterangan wajib diisi'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
