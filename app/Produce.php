<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produce extends Model
{
    //
    protected $fillable=[
      'user_id',
      'farm_id',
       'size',
      'plant_id',
      'variety',
      'start_date',
      'end_date',
      'farm_mode'
    ];

    // protected $dates= ['start_date','end_date'];

     public function user()
    {
        return $this->belongsTo(User::class);
    }

  public function plant()
    {
        return $this->belongsTo(Plant::class);
    }


  public function farm()
    {
        return $this->belongsTo(Farm::class);
    }


}
