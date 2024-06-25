<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts= Post::factory(1)->create();
        foreach ($posts as $Post) {
           /* Image::factory(1)->create([
            "concept"=> "test",
            "imageable_id"=> $Post->id,
            "imageable_type" => Post::class
           ]);  */
        }        
    }
}
