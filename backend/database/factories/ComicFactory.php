<?php

namespace Database\Factories;

use App\Models\Comic;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComicFactory extends Factory
{
    protected $model = Comic::class;

    public function definition()
    {
        return [
            'title' => $this->faker->unique()->sentence(3),
            'description' => $this->faker->paragraph(),
            'cover_image' => $this->faker->imageUrl(300, 400, 'comics'),
            'author' => $this->faker->unique()->sentence(3),
            'status' => $this->faker->randomElement(['ongoing', 'completed']),
            'type' => $this->faker->randomElement(['text', 'comic', 'mixed']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
