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
       'slug',
      'variety',
      'start_date',
      'end_date',
      'farm_mode'
    ];


     /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();
        static::created(function ($produce) {
            $produce->update(['slug' => $produce->variety]);
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

//   public function getRouteKeyName()
//     {
//         return 'slug';
//     }

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
 public  function cultivations(){

        return $this->hasMany(Cultivation::class);
    }
}
