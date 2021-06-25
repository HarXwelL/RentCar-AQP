<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function reviews()
    {
        return $this->belongsTo('App\Models\Reviews');
    }

    public function auto()
    {
        return $this->belongsTo('App\Models\Auto');
    }
    protected $fillable = ['id', 'user_id', 'auto_id','payment_type','start_date'];
}
