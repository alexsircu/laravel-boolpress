<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //relazionarmi con un'altra tabella
    public function infoPost() {
        return $this->hasOne('App\InfoPost');
    }
}
