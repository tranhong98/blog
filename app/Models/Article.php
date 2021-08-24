<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'name',
        'brief',
        'content',
        'image',
        'views',
        'category_id',
        'user_id',
    ];
}
