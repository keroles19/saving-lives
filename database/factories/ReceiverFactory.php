<?php

namespace Database\Factories;

use App\Models\Hospital;
use App\Models\Organ;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReceiverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {

        return [
            'full_name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'phone' => $this->faker->numerify('##############'),
            'address' => $this->faker->address,
            'national_number' => $this->faker->numberBetween(10000000000000, 99999999999999),
            'blood_type' => $this->faker->randomElement([
                'A', 'A+', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'
            ]),
            'description' => $this->faker->sentence(20),
            'status' => 1,
            'organ_id' => Organ::factory()->create(),
            'hospital_id' => Hospital::factory()->create(),
        ];
    }

}
