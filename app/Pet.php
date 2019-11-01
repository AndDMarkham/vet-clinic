<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public function person()
    {
        return $this->belongsTo('App\Person');
    }

    public function pet()
    {
        return $this->belongsTo('App\Photo');
    }
}
