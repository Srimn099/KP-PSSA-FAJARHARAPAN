<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tbhistorisaldotrx extends Model
{
    protected $table = 'tb_histori_saldo_trx';
    protected $fillable = [
       'kode_kategori',
       'kode_trx',
       'debet',
       'kredit',
       'saldo',
    ];
    static $rules = [
        'kode_kategori' => 'required',
        'kode_trx' => 'required',
        'debet' => 'required',
        'kredit' => 'required',
        'saldo' => 'required',
    ];
    static $messages = [
        'kode_kategori.required' => 'Kode Kategori wajib diisi',
        'kode_trx.required' => 'Kode Transaksi wajib diisi',
        'debet.required' => 'Debet wajib diisi',
        'kredit.required' => 'Kredit wajib diisi',
        'saldo.required' => 'Saldo wajib diisi',
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];


}
