<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('tglLengkap', function ($tanggal) {
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

            if (!empty($tanggal)) {
                try {
                    $date = new \DateTime($tanggal);

                    // Mengambil hari, bulan, dan tahun
                    $hari = $date->format('j'); // Hari tanpa leading zero
                    $bulan = $namaBulan[(int)$date->format('n')]; // Nama bulan
                    $tahun = $date->format('Y'); // Tahun

                    // Mengembalikan format tanggal lengkap
                    return "<?php echo '$hari $bulan $tahun'; ?>";
                } catch (\Exception $e) {
                    // Jika terjadi exception, gunakan tanggal saat ini
                    $date = new \DateTime(); // Ambil tanggal saat ini
                    $hari = $date->format('j');
                    $bulan = $namaBulan[(int)$date->format('n')];
                    $tahun = $date->format('Y');

                    // Mengembalikan format tanggal lengkap
                    return "<?php echo '$hari $bulan $tahun'; ?>";
                }
            }

            // Jika tanggal kosong, kembalikan string kosong
            return "<?php echo ''; ?>";
        });

        Blade::directive('formatRupiah', function ($nilai) {
            // Pastikan nilai adalah angka
            $harga = number_format((float)$nilai, 2, ',', '.');
            return "<?php echo 'Rp. ' . '$harga'; ?>";
        });
    }
}
