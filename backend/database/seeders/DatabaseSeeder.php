<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Comic;
use App\Models\Chapter;
use App\Models\Page;
use App\Models\Comment;
use App\Models\Genre;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        User::factory(10)->create();
        Genre::factory(5)->create();

        Comic::factory(20)->create()->each(function ($comic) {
            $comic->chapters()->saveMany(Chapter::factory(rand(5, 15))->make());

            if ($comic->type !== 'text') {
                foreach ($comic->chapters as $chapter) {
                    $chapter->pages()->saveMany(Page::factory(rand(5, 20))->make());
                }
            }
        });

        Comment::factory(50)->create();
    }
}
