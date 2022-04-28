<?php

namespace Database\Factories\tenant;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserLeaveBalanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'leave' => $this->faker->name(),
            'current' => $this->faker->name(),
            'available' => $this->faker->name(),
            'scheduled' => $this->faker->name(),
            'started_at' => $this->faker->date(),
            'finished_at' => $this->faker->date(),
            'user_id' => $this->faker->randomNumber(1,100),
        ];
    }
}
