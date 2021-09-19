<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'categorizable_id',
        'categorizable_type',
    ];

    public function categorizable()
    {
        return $this->morphTo(Article::class);
    }
}
