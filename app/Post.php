<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //relazionarmi con un'altra tabella
    public function infoPost() {
        return $this->hasOne('App\InfoPost');
    }

    public function comments() { //scrivo comments con la s perchè ad un post corrispondono più commenti
        return $this->hasMany('App\Comment');
    }
}
