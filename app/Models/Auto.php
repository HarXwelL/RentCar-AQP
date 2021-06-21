<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;

    public function rental()
    {
        return $this->hasMany('App\Models\Rental');
    }

    public function provider()
    {
        return $this->belongsTo('App\Models\Provider');
    }
}
