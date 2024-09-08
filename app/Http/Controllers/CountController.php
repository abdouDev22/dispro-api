<?php

namespace App\Http\Controllers;

use App\Models\Count;
use Illuminate\Http\Request;

class CountController extends Controller
{
    public function index()
    {
        $counts = Count::with('user', 'car')->get();
        return response()->json([
            'code' => '200',
            'data' => $counts
        ]);
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

        return response()->json([
            'code' => '201',
            'data' => $count
        ], 201);
    }

    public function show(Count $count)
    {
        return response()->json([
            'code' => '200',
            'data' => $count->load('user', 'car')
        ]);
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

        return response()->json([
            'code' => '200',
            'data' => $count
        ]);
    }

    public function destroy(Count $count)
    {
        $count->delete();

        return response()->json([
            'code' => '204',
            'data' => null
        ], 204);
    }
}
