<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = ['id'];

    public static function search($query) {

        return self::where('title', 'LIKE', '%'.$query.'%')->get();
    }
}
