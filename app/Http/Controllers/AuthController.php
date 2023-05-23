<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('usuario', 'senha');

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        if (!$user || $user->senha !== $credentials['senha']) {
            return response()->json(['isLoggedIn' => false], 401);
        }

        return response()->json(['isLoggedIn' => true], 200);
    }
}
