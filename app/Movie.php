<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['title', 'director', 'imageUrl', 'duration', 'relaseDate', 'genre'];

    public static function search($query, $take, $skip) {
        return self::where('title', 'LIKE', '%'.$query.'%')->take($take)->skip($skip)->get();
    }
}
