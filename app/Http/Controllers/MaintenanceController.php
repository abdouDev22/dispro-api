<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function index()
    {
        return response()->json(Maintenance::with('car')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'date' => 'required|date',
            'details' => 'required|string',
            'kilometers' => 'required|numeric',
        ]);

        $maintenance = Maintenance::create($request->all());

        return response()->json($maintenance, 201);
    }

    public function show(Maintenance $maintenance)
    {
        return response()->json($maintenance->load('car'));
    }

    public function update(Request $request, Maintenance $maintenance)
    {
        $request->validate([
            'car_id' => 'exists:cars,id',
            'date' => 'date',
            'details' => 'string',
            'kilometers' => 'numeric',
        ]);

        $maintenance->update($request->all());

        return response()->json($maintenance);
    }

    public function destroy(Maintenance $maintenance)
    {
        $maintenance->delete();

        return response()->json(null, 204);
    }
}

