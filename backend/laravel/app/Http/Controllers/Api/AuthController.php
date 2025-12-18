<?php

namespace App\Http\Controllers\Api;

use App\Actions\PasswordNormalization;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();
        $phoneNumber = $validated['phone'];
        $normalizationPhone = PasswordNormalization::run($phoneNumber);

        User::create([
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'middle_name' => $validated['middle_name'] ?? null,
                'email' => $validated['email'] ?? null,
                'phone' => $normalizationPhone,
                'login' => $validated['login'],
                'password_hash' => Hash::make($validated['password']),
            ]);
        return response()->json([
            "message"=> "Registration is successful",
        ],200);
    }

    public function login(LoginRequest $request)
    {
        $user = User::where("login", $request->login)->first();
        Hash::check($request->password, $user->password_hash);
        $user->tokens()->delete();
        return response()->json([
            "token"=>$user->createToken("auth-token")->plainTextToken,
        ]);

    }

    public function logout()
    {
        Auth::user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

}
