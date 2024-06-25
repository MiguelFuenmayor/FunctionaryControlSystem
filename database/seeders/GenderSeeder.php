<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gender::factory()->create([
            'name'=> 'masculino'
        ]);
        Gender::factory()->create([
            'name'=>'femenino'
        ]);
    }
}
