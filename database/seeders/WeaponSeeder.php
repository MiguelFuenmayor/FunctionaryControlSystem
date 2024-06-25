<?php

namespace Database\Seeders;
use App\Models\Weapon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Weapon::factory(100)->create();
    }
}
