<?php

namespace Database\Seeders;

use App\Models\Tbaset;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Tbaset::factory()->count(10)->create(); // Pastikan memanggil factory dengan benar
    }
}
