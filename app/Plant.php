<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    //
    protected $fillable = [
        'name',
        'image',

    ];

  public function getImageUrlAttribute($value)
    {

        $imageUrl = "";

        if (!is_null($this->image)) {

            $imagePath = base_path()  . '/public/images/' . $this->image;

            if (file_exists($imagePath))  $imageUrl = asset("images/" . $this->image);
        }

        return   $imageUrl;
    }


     public  function varieties(){

        return $this->hasMany(Variety::class);
    }

     public  function produces(){

        return $this->hasMany(Produce::class);
    }



}
