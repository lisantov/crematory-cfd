<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Actions\PasswordNormalization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResetPasswordController extends Controller
{
    public function reset(Request $request, PasswordNormalization $phoneNormalization)
    {
        $validated = $request->validate([
            'token' => 'required',
            'phone' => 'required',
            'password' => 'required|confirmed',
        ]);

        $phone = $phoneNormalization->handle($validated['phone']);

        $tokenExists = DB::table('password_reset_tokens')
            ->where('email', $phone)
            ->where('token', $validated['token'])
            ->exists();

        if (!$tokenExists) {
            return response()->json(['error' => 'Invalid token'], 400);
        }

        DB::table('users')
            ->where('phone', $phone)
            ->update([
                'password' => bcrypt($validated['password'])
            ]);

        DB::table('password_reset_tokens')
            ->where('email', $phone)
            ->delete();

        return response()->json(['success' => true]);
    }
}
