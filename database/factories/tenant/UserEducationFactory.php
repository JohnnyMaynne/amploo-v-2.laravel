<?php

namespace Database\Factories\tenant;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserEducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'school_name' => $this->faker->name(),
            'degree' => $this->faker->name(),
            'major' => $this->faker->name(),
            'gpa' => $this->faker->name(),
            'started_at' => $this->faker->date(),
            'finished_at' => $this->faker->date(),
            'user_id' => $this->faker->randomNumber(1,100),
        ];
    }
}
