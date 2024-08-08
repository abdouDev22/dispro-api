<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return response()->json(Car::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'matricule' => 'required|string|unique:cars',
            'nombre_de_chevaux' => 'required|integer',
        ]);

        $car = Car::create($request->all());

        return response()->json($car, 201);
    }

    public function show(Car $car)
    {
        return response()->json($car);
    }

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'matricule' => 'string|unique:cars,matricule,' . $car->id,
            'nombre_chevaux' => 'integer',
        ]);

        $car->update($request->all());

        return response()->json($car);
    }

    public function destroy(Car $car)
    {
        $car->delete();

        return response()->json(null, 204);
    }
}

