<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ComicGenre extends Pivot
{
    use HasFactory;

    protected $table = 'comic_genre';

    protected $fillable = [
        'comic_id',
        'genre_id',
    ];
}

