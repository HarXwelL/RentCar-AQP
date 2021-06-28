<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutoCli extends Model
{
    use HasFactory;

    public function scopePrice($query, $price){
        if($price)
            return $query->where('price','LIKE',"%$price%");
    }

    public function scopeCapacity($query, $capacity){
        if($capacity)
            return $query->where('email','LIKE',"$capacity");
    }
}
