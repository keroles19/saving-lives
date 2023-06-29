<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(10),
            'short_description' => $this->faker->sentence(20),
            'description' => $this->faker->sentence(200),
            'image' => $this->faker->image(),
            'status' => 1
        ];
    }

}
