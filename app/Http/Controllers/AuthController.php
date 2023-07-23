<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function signIn(Request $request)
    {
        if (Auth::attempt($request->only(['email', 'password']))) {
            /** @var \App\Models\User $user */
            $user = Auth::user();
            $token = $user->createToken('token')->accessToken;
            return [
                'token' => $token,
            ];
        }

        return response(['error' => 'Invalid Credentials!'], Response::HTTP_UNAUTHORIZED);
    }
}
