<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    public function psycholoog(){
        return $this->belongsTo('App\Psycholoog');          // een availability kan maar tot 1 psycholoog behoren
    }
}
