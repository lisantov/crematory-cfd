<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
      public function showProfile(Request $request)
    {
        $user = User::find($request->user()->id);
        return response()->json([
            "profile"=> $user,
        ],200);

    }
    public function updateProfile(UpdateProfileRequest $request)
    {
        $user = User::find($request->user()->id);
        $user->update($request->all());
        return response()->json([
            "message"=>"profile update",
            "user"=>$user,
        ],200);
    }
    public function destroyProfile(Request $request)
    {
        $user = User::find($request->user()->id);
        $user->delete();
        return response()->json([
            "message"=> "Profile deleted",
            "user"=>$user,
        ],200);
    }
}
