<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Tbsiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class TbsiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'foto' => $this->faker->imageUrl(200, 200, 'people', true, 'Faker'), // URL gambar acak
            'nama' => $this->faker->name(),
            'tmp_lahir' => $this->faker->city(),
            'tgl_lahir' => $this->faker->date(),
            'jk' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'pendidikan_terakhir' => $this->faker->randomElement(['SD', 'SMP', 'SMA']),
            'nama_ayah' => $this->faker->name('male'),
            'nama_ibu' => $this->faker->name('female'),
            'pk_ortu' => $this->faker->jobTitle(),
            'alamat' => $this->faker->address(),
            'tgl_masuk' => $this->faker->date(),
            'tgl_keluar' => $this->faker->optional()->date(), // Nilai bisa kosong
            'status' => $this->faker->randomElement(['aktif', 'tidak aktif']),
            'keterangan' => $this->faker->sentence(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
