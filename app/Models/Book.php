<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // book has many review but a review has only 1 book
    use HasFactory;

    public function reviews()
    {
        //  return HASMANY() Review model :: class
        return $this->hasMany(Review::class);
    }
}
