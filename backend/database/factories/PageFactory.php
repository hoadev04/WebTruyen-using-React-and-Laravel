<?php

namespace Database\Factories;

use App\Models\Page;
use App\Models\Chapter;
use Illuminate\Database\Eloquent\Factories\Factory;

class PageFactory extends Factory
{
    protected $model = Page::class;

    public function definition()
    {
        return [
            'chapter_id' => Chapter::factory(),
            'page_number' => $this->faker->numberBetween(1, 20),
            'image_url' => $this->faker->imageUrl(800, 1200, 'comics'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

