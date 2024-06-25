<?php

namespace Database\Factories;

use App\Models\Rank;
use App\Models\User;
use App\Models\Promo;
use App\Models\Gender;
use App\Models\Status;
use App\Models\Dependency;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Functionary>
 */
class FunctionaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "surnames"=>$this->faker->lastName(),
            "names"=>$this->faker->firstName(),
            "age"=>$this->faker->randomNumber(2,true),
            "gender_id"=>Gender::all()->random()->id,
            "identity_document"=>$this->faker->randomNumber(9,true),
            "credential"=>$this->faker->randomNumber(9,true),
            "start_date"=>$this->faker->date('Y-m-d'),
            "end_date"=>$this->faker->date('Y-m-d'),
            "promo_id"=>Promo::all()->random()->id,
            "status_id"=>Status::all()->random()->id ,
            "rank_id"=>Rank::all()->random()->id ,
            "dependency_id"=>Dependency::all()->random()->id
        ];
    }
}
