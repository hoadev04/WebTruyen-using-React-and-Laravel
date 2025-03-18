<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'cover_image',
        'author',
        'status',
        'type',
    ];

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'comic_genre');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

