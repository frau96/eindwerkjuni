<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psycholoog extends Model
{
    public function availabilities(){
        return $this->HasMany('App\Psycholoog');          // een psycholoog heeft meerdere availabilities
    }
    public function user(){
        return $this->belongsTo('App\User');              // éénn psycholoog behoort tot één user
    }
}
