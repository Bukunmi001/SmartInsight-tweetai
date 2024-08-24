<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Autobot;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,  // Generates a random sentence as the title
            'body' => $this->faker->paragraph,  // Generates a random paragraph as the body
            'autobot_id' => Autobot::factory(), // Associates the post with an Autobot
        ];
    }
}
