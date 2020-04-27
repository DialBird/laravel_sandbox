<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = ['id'];

    public function scopeSearchByTitle($query, $title)
    {
        return $query->where('title', $title);
    }
}
