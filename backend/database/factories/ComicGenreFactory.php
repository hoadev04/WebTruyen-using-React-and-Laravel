<?php

namespace Database\Factories;

use App\Models\Comic;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComicGenreFactory extends Factory
{
    public function definition()
    {
        return [
            'comic_id' => Comic::factory(),
            'genre_id' => Genre::factory(),
        ];
    }
}

