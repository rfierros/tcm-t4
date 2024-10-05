<?php

namespace Database\Seeders;
use App\Models\Ciclista;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CiclistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear 25 ciclistas aleatorios
        Ciclista::factory(25)->create();
    }
}
