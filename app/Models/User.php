<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function reviews()
    {
        return $this->hasMany('App\Models\Reviews');
    }

    public function rental()
    {
        return $this->hasMany('App\Models\Rental');
    }

    public function adminlte_image()
    {
        return 'https://picsum.photos/300/300';
    }
    public function adminlte_desc()
    {
        return 'administrador';
    }
}
