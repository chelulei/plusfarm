<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variety extends Model
{
    //
     public function plant()
    {
        return $this->belongsTo(Plant::class);
    }
}

