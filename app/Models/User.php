<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // /**
    //  * The attributes that appends to returned entities.
    //  *
    //  * @var array
    //  */
    // protected $appends = ['photo'];

    /**
     * The getter that return accessible URL for user photo.
     *
     * @var array
     */
    // public function getPhotoUrlAttribute()
    // {
    //     if ($this->foto !== null) {
    //         return url('media/user/' . $this->id . '/' . $this->foto);
    //     } else {
    //         return url('media-example/no-image.png');
    //     }
    // }

    public function Profiles(){
        return $this->hasOne(Profile::class, 'user_id');
    }

    public function shop(){
        return $this->hasOne(ShopProfile::class, 'users_id');
    }

    public function products(){
        return $this->hasMany(Product::class, 'users_id');
    }

    public function carts(){
        return $this->hasMany(Cart::class, 'users_id');
    }

    public function orders(){
        return $this->hasMany(Order::class, 'users_id');
    }

    public function favorites(){
        return $this->hasMany(Favorite::class, 'users_id');
    }



    public function getGalleryAttribute()
    {
        return $this->getMedia('gallery');
    }

}
