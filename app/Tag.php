<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    { //scrivo posts con la s perchè ad un tag corrispondono più post
        return $this->belongsToMany('App\Post');
    }
}
