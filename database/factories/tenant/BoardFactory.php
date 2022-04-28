<?php

namespace Database\Factories\tenant;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BoardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'published' => $this->faker->boolean(),
            'name' => $this->faker->name(),
            'author_id' => $this->faker->randomNumber(1,100),
        ];
    }
}
