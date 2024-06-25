<?php

namespace Database\Seeders;

use App\Models\Rank;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          Rank::factory()->create([
            "name" => "Oficial Raso"
          ]);
          Rank::factory()->create([
            "name" => "Oficial Agregado"
          ]);
          Rank::factory()->create([
            "name" => "Oficial en Jefe"
          ]);
          Rank::factory()->create([
            "name" => "Supervisor Raso"
          ]);
          Rank::factory()->create([
            "name" => "Supervisor Agregado"
          ]);
          Rank::factory()->create([
            "name" => "Supervisor en Jefe"
          ]);
          Rank::factory()->create([
            "name" => "Comandante Raso"
          ]);
          Rank::factory()->create([
            "name" => "Comandante Agregado"
          ]);
          Rank::factory()->create([
            "name" => "Comandante en Jefe"
          ]);
    }
}
