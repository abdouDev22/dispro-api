<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition()
    {
        return [
            'matricule' => $this->faker->unique()->regexify('[A-Z]{2}[0-9]{3}[A-Z]{2}'),
            'nombre_de_chevaux' => $this->faker->numberBetween(50, 500),
        ];
    }
}
