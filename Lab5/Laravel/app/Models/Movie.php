<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'length', 'year', 'director'];

    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'movies_actors');
    }
}
