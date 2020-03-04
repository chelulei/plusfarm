<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     public  function farms(){

        return $this->hasMany(Farm::class);
    }


     public  function produces(){

        return $this->hasMany(Produce::class);
    }


     public  function preparations(){

        return $this->hasMany(Preparation::class);
    }

     public  function activities(){

        return $this->hasMany(Activity::class);
    }

     public  function storages(){

        return $this->hasMany(Storage::class);
    }
     public  function harvestings(){

        return $this->hasMany(Harvesting::class);
    }

    public  function plantings(){

        return $this->hasMany(Planting::class);
    }
}
