<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Tag;
use App\Models\Rank;
use App\Models\Promo;
use App\Models\Charge;
use App\Models\Status;
use App\Models\Category;
use App\Models\Dependency;
use App\Models\Functionary;
use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //NO ESTA GENERANDO IMAGENES
        Storage::makeDirectory('posts');
        Storage::makeDirectory('functionaries');
        $this->call(WeaponSeeder::class);
        $this->call(RankSeeder::class);
        $this->call(GenderSeeder::class);
        Category::factory(4)->create();
        Tag::factory(5)->create();
        Promo::factory(4)->create();
        Status::factory(4)->create();
        Dependency::factory(4)->create();
        Charge::factory(4)->create();
        $this->call(UserSeeder::class);
        $this->call(FunctionarySeeder::class);
        $this->call(PostSeeder::class);
        
        
        

        
    }
}
