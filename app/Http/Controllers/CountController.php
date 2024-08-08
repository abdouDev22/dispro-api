<?php

namespace App\Http\Controllers;

use App\Models\Count;
use Illuminate\Http\Request;

class CountController extends Controller
{
    public function index()
    {
        return response()->json(Count::with('user', 'car')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'car_id' => 'required|exists:cars,id',
            'start_time' => 'required|date',
            'end_time' => 'nullable|date',
            'distance' => 'required|numeric',
        ]);

        $count = Count::create($request->all());

        return response()->json($count, 201);
    }

    public function show(Count $count)
    {
        return response()->json($count->load('user', 'car'));
    }

    public function update(Request $request, Count $count)
    {
        $request->validate([
            'user_id' => 'exists:users,id',
            'car_id' => 'exists:cars,id',
            'start_time' => 'date',
            'end_time' => 'nullable|date',
            'distance' => 'numeric',
        ]);

        $count->update($request->all());

        return response()->json($count);
    }

    public function destroy(Count $count)
    {
        $count->delete();

        return response()->json(null, 204);
    }
}

