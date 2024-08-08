<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['matricule', 'nombre_de_chevaux'];

    public function counts()
    {
        return $this->hasMany(Count::class);
    }

    public function maintenances()
    {
        return $this->hasMany(Maintenance::class);
    }
}

