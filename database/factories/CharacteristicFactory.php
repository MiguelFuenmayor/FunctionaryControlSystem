<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Characteristic>
 */
class CharacteristicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "height_in_cm"=>$this->faker->randomElement(['180','174','190','160']),
            "hair_color"=>$this->faker->randomElement(['castaño','rubio']),
            "skin_color"=>$this->faker->randomElement(['Blanco','Moreno','Negro']),
            "weight_in_kg"=>$this->faker->randomElement(['80','100','70','60']),
            "other_characteristics"=>$this->faker->sentence()
        ];
    }
}
