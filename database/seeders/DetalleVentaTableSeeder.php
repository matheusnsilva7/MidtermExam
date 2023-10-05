<?php

namespace Database\Seeders;

use App\Models\DetalleVenta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetalleVentaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetalleVenta::factory()->count(10)->create();
    }
}
