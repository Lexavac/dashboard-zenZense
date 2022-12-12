<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rating extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $table = 'ratings';

    protected $append = ['gallery'];

    protected $fillable = ['user_id', 'product_id', 'name', 'comment', 'stars_rated', 'created_at'];

    public function Product (){
        return $this->belongsTo(product::class,'product_id', 'id');
    }

    public function user (){
        return $this->belongsTo(Users::class,'user_id', 'id');
    }

    public function getGalleryAttribute()
    {
        return $this->getMedia('gallery');
    }
}
