<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    //


     public  function varieties(){

        return $this->hasMany(Variety::class);
    }

     public  function produces(){

        return $this->hasMany(Produce::class);
    }
}
