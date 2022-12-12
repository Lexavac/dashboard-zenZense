<?php

namespace App\Models;

use App\Models\User;
use App\Models\Shipping;
use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    protected $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function Item(){
        return $this->hasMany(OrderItem::class, 'orders_id');
    }

    public function Shipping(){
        return $this->hasOne(Shipping::class, 'orders_id');
    }

    public function getGalleryAttribute()
    {
        return $this->getMedia('gallery');
    }

    public function Profiles(){
        return $this->hasMany(User::class);
    }

    public function Profile(){
        return $this->hasOne(Profile::class, 'user_id');
    }
}
