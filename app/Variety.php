<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variety extends Model
{
    //

    protected $fillable = [

        'plant_id',
        'name',
         'days',
        'image'

    ];

    public function getImageUrlAttribute($value)
    {

        $imageUrl = "";

        if (!is_null($this->image)) {

            $imagePath = public_path() . "/images/" . $this->image;

            if (file_exists($imagePath))  $imageUrl = asset("images/" . $this->image);
        }

        return   $imageUrl;
    }
     public function plant()
    {
        return $this->belongsTo(Plant::class);
    }
     public  function produces(){

        return $this->hasMany(Produce::class);
    }

}

