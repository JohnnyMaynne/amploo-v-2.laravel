<?php

namespace Database\Factories\tenant;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserDependentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'dependents' => $this->faker->name(),
            'phone' => $this->faker->name(),
            'started_at' => $this->faker->date(),
            'user_id' => $this->faker->randomNumber(1,100),
        ];
    }
}
