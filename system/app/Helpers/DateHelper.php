<?php

namespace App\Helpers;

class DateHelper
{
    public static function formatTanggal($tanggal)
    {
        // Mengubah string tanggal menjadi objek DateTime
        $date = new \DateTime($tanggal);

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
}
