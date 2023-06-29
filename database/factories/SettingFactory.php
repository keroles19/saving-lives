<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subhead' => $this->faker->sentence(10),
            'content' => $this->faker->sentence(20),
            'team_name' => $this->faker->domainName,
            'title' => 'saving lives',
            'about' => $this->faker->sentence(20),
            'facebook' => $this->faker->url,
            'whatsapp' => $this->faker->numerify('######'),
            'email' => $this->faker->email,
            'copyright' => $this->faker->date('Y'),
        ];
    }

}
