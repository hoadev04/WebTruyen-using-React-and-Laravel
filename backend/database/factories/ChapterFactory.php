<?php

namespace Database\Factories;

use App\Models\Chapter;
use App\Models\Comic;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChapterFactory extends Factory
{
    protected $model = Chapter::class;

    public function definition()
    {
        return [
            'comic_id' => Comic::factory(),
            'chapter_number' => $this->faker->numberBetween(1, 50),
            'title' => $this->faker->sentence(5),
            'content' => $this->faker->randomElement([null, $this->faker->paragraphs(5, true)]),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
