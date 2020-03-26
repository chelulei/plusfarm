<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harvest extends Model
{
    //
 protected $fillable=[
            'user_id',
            'produce_id',
            'total_harv',
            'total_inc',
            'remarks',

];

    public function produce()
    {
        return $this->belongsTo(Produce::class);
    }
}