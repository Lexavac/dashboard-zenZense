<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;


    protected $table = 'users';

    protected $append = ['profile'];


    public function getGalleryAttribute()
    {
        return $this->getMedia('gallery');
    }

    public function Profile(){
        return $this->hasMany(User::class);
    }


    public function products(){
        return $this->hasMany(product::class, 'users_id');
    }
    
    public function category()
    {
        return $this->belongsTo(Tb_productcate::class, 'category_id');
    }
}
