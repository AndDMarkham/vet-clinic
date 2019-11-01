<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'first_name',
        'surname',
        'address',
        'phone',
        'email'
    ];

    public function pets()
    {
        return $this->hasMany('App\Pet');
    }

    // public function reports()
    // {
    //     return $this->hasMany('App\Report');
    // }
}
