<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psycholoog extends Model
{
    public function availabilities(){
        return $this->HasMany('App\Psycholoog');
    }
}
