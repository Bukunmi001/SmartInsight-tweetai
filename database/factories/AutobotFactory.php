<?php

namespace Database\Factories;

use App\Models\Autobot;
use Illuminate\Database\Eloquent\Factories\Factory;

class AutobotFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Autobot::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,  // Generates a random name for each Autobot
        ];
    }
}
