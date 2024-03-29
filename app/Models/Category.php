<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    function books(){
        return $this->belongsToMany(Book::class);
    }

    use HasFactory;
}
