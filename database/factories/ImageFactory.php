<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        if(Storage::directoryMissing('functionaries')){
            Storage::makeDirectory('functionaries/');
        }
        return [
            'url' => 'functionaries/' . $this->faker->image(
                'public/storage/functionaries', 
                640, //ancho
                480, //alto
                null, //categoría
                false //nombre sin la url
            ),

        ];
    }
}
