<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    protected $fillable = ['user_id', 'car_id', 'start_time', 'end_time', 'distance'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}

