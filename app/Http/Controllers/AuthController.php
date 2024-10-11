<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = User::query()->create($request->validated());

        return [
            'user' => $user,
            'token' => $user->createToken($request->name)->plainTextToken,
        ];
    }
    public function login(LoginRequest $request)
    {
        $user = User::query()->where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return [
                'message' => 'Poshel nahuy!'
            ];
        }
        return [
            'user' => $user,
            'token' => $user->createToken($user->name)->plainTextToken,
        ];
    }
    public function logout(LoginRequest $request)
    {
        return $request->user()->tokens()->delete();
    }
}
