<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Notification;
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
        'name','id_number', 'username', 'slug', 'type','email', 'password', 'image'
    ];

     /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::created(function ($blog) {
            $blog->update(['slug' => $blog->username]);
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
    public function getNameAttribute($value)
    {
        return ucwords($value);
    }

    public function getUserNameAttribute($value)
    {
        return ucwords($value);
    }

    public function setUserNameAttribute($value)
    {
        $this->attributes['username'] = strtolower($value);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";
        if (!is_null($this->image)) {
            $imagePath = public_path() . "/images/" . $this->image;
            if (file_exists($imagePath))  $imageUrl = asset("images/" . $this->image);
        }
        return   $imageUrl;
    }
    public function getImageThumbUrlAttribute($value)
    {
        $imageUrl = "";

        if ( ! is_null($this->image))
        {
            $ext    = substr(strrchr($this->image, '.'), 1);
            $thumbnail = str_replace(".{$ext}", "_thumb.{$ext}", $this->image);
            $imagePath = public_path() . "/images/"  . $thumbnail;
            if (file_exists($imagePath)) $imageUrl = asset("images/" . $thumbnail);
        }

        return $imageUrl;
    }

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

    public  function cultivations(){

        return $this->hasMany(Cultivation::class);
    }

 public  function harvests(){

        return $this->hasMany(Harvest::class);
    }

  public  function blogs(){

        return $this->hasMany(Blog::class);
    }

    public  function php(){

         if (isset($filterConfig) && isset($filterConfig['show']['all'])) {
        $showAll = true;
        } else {
        $showAll = false;
        }
    }

}
