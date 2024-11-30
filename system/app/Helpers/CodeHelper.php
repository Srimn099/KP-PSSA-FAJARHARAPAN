<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class CodeHelper
{
    public static function kode($model, $prefix)
    {
        // Ambil entri terbaru berdasarkan prefix
        $latestEntry = $model::where('id', 'LIKE', "{$prefix}.%")
            ->orderBy('id', 'desc')
            ->first();

        // Ambil ID terbaru atau set ke 0 jika tidak ada
        $latestId = $latestEntry ? (int) Str::after($latestEntry->kode, "{$prefix}.") : 0;

        // Increment ID dan format dengan padding
        $nextId = str_pad($latestId + 1, 3, '0', STR_PAD_LEFT);

        // Ambil tanggal sekarang dalam format Ymd
        $tanggalSekarang = date('Ymd');

        // Buat kode baru
        $kode = "{$prefix}.{$nextId}.{$tanggalSekarang}";

        return $kode;
    }
}
