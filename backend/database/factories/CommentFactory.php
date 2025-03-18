<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\User;
use App\Models\Chapter;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'chapter_id' => Chapter::factory(),
            'user_id' => User::factory(),
            'content' => $this->faker->sentence(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
