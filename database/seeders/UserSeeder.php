<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            
            "email"=>"miguelinglesmn@gmail.com",
            "password"=> bcrypt("12345678"),
            "is_admin"=> true,
        ]);
        User::factory(50)->create();
    }
}
