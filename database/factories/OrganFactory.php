<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'organ_name' => $this->faker->unique()->randomElement([
               'Bones', 'Kidneys', 'Salivary Glands' ,'Ureters' , 'Cerebellum',
               'Lungs', 'Nose', 'Pineal Gland', 'Eyes', 'Joints', 'Kidneys',
               'Skeletal Muscles'
           ]),
        ];
    }

}
