<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\bodegas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            marcas::class,
            bodegasSeeder::class,
            dispositivosSeeder::class,
            modelosSeeder::class,
            existenciasSeeder::class
        ]);
    }
}
