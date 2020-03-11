<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    //
    protected $fillable = [
        'county_id',
        'name',

    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }
}
