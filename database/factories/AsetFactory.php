<?php

namespace Database\Factories;


use App\Models\Tbaset;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsetFactory extends Factory
{
    protected $model = Tbaset::class;

    public function definition()
    {
        return [
            'kode_aset' => fake()->unique()->bothify('AS-###??'),
            'nama_aset' => fake()->word(),
            'bahan' => fake()->word(),
            'merk' => fake()->word(),
            'satuan' => fake()->randomElement(['pcs', 'kg', 'liter', 'unit']),
            'harga' => fake()->randomFloat(2, 1000, 100000),
            'qty' => fake()->randomFloat(2, 1, 100),
            'total' => fake()->randomFloat(2, 1000, 100000),
            'kondisi' => fake()->randomElement(['Baik', 'Rusak', 'Perlu Perbaikan']),
            'lokasi_simpan' => fake()->word(),
            'tgl_peroleh' => fake()->date(),
            'jenis_aset' => fake()->randomElement(['TETAP', 'TIDAK TETAP']),
            'keterangan' => fake()->paragraph(),
        ];
    }
}
