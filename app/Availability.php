<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    public function psycholoog(){
        return $this->belongsTo('App\Psycholoog');
    }

}
