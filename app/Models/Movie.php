<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
