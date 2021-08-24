<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    protected $table='users';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }
}
