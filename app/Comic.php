<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        "title",
        "photo",
        "author",
        "genre",
        "description",
        "price",
        "exitDate",
    ];
}
