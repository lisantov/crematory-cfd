<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ForgotPasswordController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'phone' => 'required|string',
        ]);

        $user = User::where('phone', $request->phone)->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Пользователь с таким номером телефона не найден'
            ], 404);
        }

        $token = Str::random(64);
        $expiresAt = Carbon::now()->addHours(1);

        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $request->phone],
            [
                'token' => $token,
                'created_at' => now(),
            ]
        );

        return response()->json([
            'success' => true,
            'message' => 'Токен восстановления пароля создан',
            'token' => $token,
        ]);
    }
}
