<?php

namespace App\Http\Controllers\Api;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function image(ProfileRequest $request)
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        if (!is_null($user->profile_picture_path)) {
            Storage::disk('public')->delete($user->profile_picture_path);
        }

        $user->profile_picture_path = $request->file('profile_picture_path')->storePublicly('images', 'public');
        $user->save();

        return response()->json([
            'message' => 'Image uploaded successfully',
            'image' => $user->profile_picture_path
        ]);
    }
}
