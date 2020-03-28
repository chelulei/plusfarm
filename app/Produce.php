<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Produce extends Model
{
    //
    protected $fillable=[
      'user_id',
      'farm_id',
       'size',
      'plant_id',
       'slug',
      'variety_id',
      'start_date',
      'end_date',
      'farm_mode'
    ];

     /**
     * Boot the model.
     */
    // protected static function boot()
    // {
    //     parent::boot();
    //     static::created(function ($produce) {
    //         $produce->update(['slug' => $produce->variety]);
    //     });
    // }

    //  /**
    //  * Set the proper slug attribute
    //  *
    //  * @param string $value
    //  */
    // public function setSlugAttribute($value)
    // {
    //     if (static::whereSlug($slug = str_slug($value))->exists()) {

    //         $slug = "{$slug}-{$this->id}";

    //     }
    //     $this->attributes['slug'] = $slug;
    // }

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

        return $this->hasMany(Planting::class)->where('plantings.status', 0)->orderBy('id','desc');
    }

     public  function harvestings(){

        return $this->hasMany(Harvesting::class)->where('harvestings.status', 0)->orderBy('id','desc');
    }

     public  function storages(){

        return $this->hasMany(Storage::class)->where('storages.status', 0)->orderBy('id','desc');
    }
      public  function activities(){

        return $this->hasMany(Activity::class)->where('activities.status', 0)->orderBy('id','desc');
    }

     public  function preparations(){

        return $this->hasMany(Preparation::class)->where('preparations.status', 0)->orderBy('id','desc');
    }
 public  function cultivations(){

        return $this->hasMany(Cultivation::class)->where('cultivations.status', 0)->orderBy('id','desc');
    }

    public  function harvests(){

        return $this->hasMany(Harvest::class)->where('harvests.status', 0)->orderBy('id','desc');
    }

     public function variety()
    {
        return $this->belongsTo(Variety::class);
    }
}

