<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    public function auto()
    {
        return $this->hasMany('App\Models\Auto');
    }

    public function offers()
    {
        return $this->hasMany('App\Models\Offers');
    }
}
