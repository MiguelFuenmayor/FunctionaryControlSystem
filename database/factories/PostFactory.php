<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name= $this->faker->unique()->sentence(3);
        return [
           "name" => $name,
           "slug" => str::slug($name),
            "extract" => $this->faker->sentence(2,true),
            "body"=> $this->faker->text(200),
            "status"=> $this->faker->randomElement([1,2]),
            "category_id" => Category::all()->random()->id,
           "user_id"=> User::all()->random()->id,
        ];
    }
}
