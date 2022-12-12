<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $guarded = [];

    public function orders(){
        return $this->belongsTo(Order::class, 'orders_id');
    }

    public function Products(){
        return $this->belongsTo(Product::class, 'products_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
