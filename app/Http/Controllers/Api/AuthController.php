<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller as BaseController;
use App\Http\Requests\Api\LoginUserRequest;
use App\Http\Requests\Api\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends BaseController
{
    public function register(StoreUserRequest $request)
    {
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => $user->id,
        ]);

        return $user;
    }


    public function login(LoginUserRequest $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return response()->json(['message' => 'Wrong email or password'], 401);
        }

        $user = User::where('email', $request->email)->first();
        $user->tokens()->delete();

        return response()->json([
            'user' => $user,
            'token' => $user->createToken("Token of {$user->name}")->plainTextToken,
        ], 200);
    }


    public function logout()
    {
        Auth::user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'User logout',
        ], 200);
    }
}
