<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episodes extends Model
{
    protected $fillable = [
        'movie_id','episode','title'
    ];
}
