<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function availability(){
        return $this->belongsTo('App\Availability');
    }
}
