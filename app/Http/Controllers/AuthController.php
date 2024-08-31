<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = Str::random(60);
            $user->remember_token = $token;
            $user->save();

            return response()->json(['token' => $token], 200);
        }

        return response()->json(['error' => 'Invalid credentials'], 401);
    }

    public function logout(Request $request)
{
    $user = User::where('remember_token', $request->bearerToken())->first();
    if ($user) {
        $user->remember_token = null;
        $user->save();
        return response()->json(['message' => 'Déconnexion réussie'], 200);
    }
    return response()->json(['message' => $request->bearerToken()], 401);
}

}
