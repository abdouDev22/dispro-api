<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return response()->json([
            'code' => '200',
            'data' => $cars
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'matricule' => 'required|string|unique:cars',
            'nombre_de_chevaux' => 'required|integer',
        ]);

        $car = Car::create($request->all());

        return response()->json([
            'code' => '201',
            'data' => $car
        ], 201);
    }

    public function show($id)
    {
        $car = Car::find($id);
        if (!$car) {
            return response()->json([
                'code' => '404',
                'data' => ['message' => 'Car not found']
            ], 404);
        }
        return response()->json([
            'code' => '200',
            'data' => $car
        ]);
    }

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'matricule' => 'string|unique:cars,matricule,' . $car->id,
            'nombre_chevaux' => 'integer',
        ]);

        $car->update($request->all());

        return response()->json([
            'code' => '200',
            'data' => $car
        ]);
    }

    public function destroy(Car $car)
    {
        $car->delete();

        return response()->json([
            'code' => '204',
            'data' => null
        ], 204);
    }
}
