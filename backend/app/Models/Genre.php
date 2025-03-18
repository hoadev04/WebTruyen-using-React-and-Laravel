<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', // Tên thể loại
    ];

    public function comics()
    {
        return $this->belongsToMany(Comic::class, 'comic_genre');
    }
}
