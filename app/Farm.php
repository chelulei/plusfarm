<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    //
 protected $fillable=[
           'user_id',
           'farm_name',
            'slug',
            'size',
            'ownership',
            'soiltype',
            'soilph',
            'humidity',
            'mechanization',
            'county',
            'sub_county',
            'ward',
            'street',
            'gps',
];

  /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();
        static::created(function ($farm) {
            $farm->update(['slug' => $farm->farm_name]);
        });
    }

     /**
     * Set the proper slug attribute
     *
     * @param string $value
     */
    public function setSlugAttribute($value)
    {
        if (static::whereSlug($slug = str_slug($value))->exists()) {

            $slug = "{$slug}-{$this->id}";

        }
        $this->attributes['slug'] = $slug;
    }

     public function getRouteKeyName()
    {
        return 'slug';
    }

     public function user()
    {
        return $this->belongsTo(User::class);
    }

     public  function produces(){

        return $this->hasMany(Produce::class);
    }

     public  function plantings(){

        return $this->hasMany(Planting::class);
    }

     public  function harvestings(){

        return $this->hasMany(Harvesting::class);
    }

     public  function storages(){

        return $this->hasMany(Storage::class);
    }
      public  function activities(){

        return $this->hasMany(Activity::class);
    }
     public  function preparations(){

        return $this->hasMany(Preparation::class);
    }

}
