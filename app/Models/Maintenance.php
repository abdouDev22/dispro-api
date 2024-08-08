<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $fillable = ['car_id', 'date', 'details', 'kilometers'];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}

