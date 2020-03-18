<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cultivation extends Model
{
    //

     protected $fillable=[
            'user_id',
            'produce_id',
            'task',
            'cost',
            'details',
            'remarks',

];

  public function user()
    {
        return $this->belongsTo(User::class);
    }

public function farm()
    {
        return $this->belongsTo(Farm::class);
    }

     public function produce()
    {
        return $this->belongsTo(Produce::class);
    }
}
