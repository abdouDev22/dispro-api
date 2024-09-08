<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json([
            'code' => '200',
            'data' => $users
        ]);
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());

        return response()->json([
            'code' => '201',
            'data' => $user
        ], 201);
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return response()->json([
            'code' => '200',
            'data' => $user
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return response()->json([
            'code' => '204',
            'data' => null
        ], 204);
    }
}