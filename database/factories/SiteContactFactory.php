<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiteContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'              => $this->faker->name(),
            'phone'             => $this->faker->phoneNumber(),
            'email'             => $this->faker->email(),
            'reason_contact'    => $this->faker->numberBetween(1, 3),
            'message'           => $this->faker->text(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ];
    }
}
