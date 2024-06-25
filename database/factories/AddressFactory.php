<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "functionary_id"=> NULL ,
            "address"=>$this->faker->randomElement(['Los Haticos, Barrio Chocolate','Domitila Flores, Los Cactus','Villa Chinita, casa 107G'])
        ];
    }
}
