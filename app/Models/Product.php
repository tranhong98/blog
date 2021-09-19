<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
        'number',
        'user_id',
    ];

    public function medias()
    {
        return $this->morphMany(Media::class, 'media');
    }

    public function category()
    {
        return $this->morphOne(Category::class, 'categorizable');
    }
}
