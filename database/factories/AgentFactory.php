<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgentFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'no_wa' => $this->faker->phoneNumber,
            'password' => bcrypt('password123'), // Password default
        ];
    }
}
