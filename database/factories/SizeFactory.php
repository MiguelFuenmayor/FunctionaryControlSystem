<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Size>
 */
class SizeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "uniform_type"=>$this->faker->randomElement(['motorizado','faena']),
            "t-shirt_size"=>$this->faker->randomElement(['S','M','L','XL']),
            "pants_size"=>$this->faker->randomElement(['S','M','L','XL']),
            "shoes_size"=>$this->faker->randomElement(['36','37','38','40']),
        ];
    }
}
