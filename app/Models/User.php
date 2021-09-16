<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password', 'role_id',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function article()
    {
        return $this->hasMany(Article::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function avatar()
    {
        return $this->morphOne(Media::class, 'media');
    }
}
