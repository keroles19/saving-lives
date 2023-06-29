<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use PHPUnit\Framework\Constraint\Count;

class HospitalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'phone' => $this->faker->numerify('#########'),
            'whatsapp' =>  $this->faker->numerify('#########'),
            'email' => $this->faker->safeEmail,
            'photo' => $this->faker->image(),
            'status' => '1',
            'password' => Hash::make('12345678'),
            'country_id' => Country::factory()->create(),
        ];
    }

}
