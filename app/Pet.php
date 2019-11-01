<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = [
        'name',
        'species',
        'breed',
        'weight',
        'age'
    ];

    public function person()
    {
        return $this->belongsTo('App\Person');
    }

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

    // public function reports()
    // {
    //     return $this->hasMany('App\Report');
    // }
}
