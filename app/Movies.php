<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable = [
        'genre_id','title','photo','description','rating'
    ];
}
