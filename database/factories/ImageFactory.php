<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'name' => fake()->sentence(3),
            'is_fav' => fake()->boolean(),
            'description' => fake()->paragraph(),
            'img_path' => fake()->image('storage/app/photos', 640, 480, null, false),

        ];
    }
}
