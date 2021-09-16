<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
        'name',
        'media_id',
        'media_type',
    ];
    protected $table = 'medias';

    public function mediable()
    {
        return $this->morphTo();
    }
}
