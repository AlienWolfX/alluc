<?php

namespace App\Http\Controllers\Api;

use App\Models\Admin;
use App\Models\Staff;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Login the specified user.
     */ public function login(AuthRequest $request)
    {
        $client = Client::where('email', $request->email)->first(); // Client
        $staff = Staff::where('email', $request->email)->first(); // Staff
        $admin = Admin::where('email', $request->email)->first(); // Admin

        if ($client && Hash::check($request->password, $client->password)) {
            $response = [
                'client' => $client,
                'client_token' => $client->createToken('auth_token')->plainTextToken,
            ];
        } elseif ($staff && Hash::check($request->password, $staff->password)) {
            $response = [
                'staff' => $staff,
                'staff_token' => $staff->createToken('auth_token')->plainTextToken,
            ];
        } elseif ($admin && Hash::check($request->password, $admin->password)) {
            $response = [
                'admin' => $admin,
                'admin_token' => $admin->createToken('auth_token')->plainTextToken,
            ];
        } else {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return response($response, 200);
    }

    /**
     * Logout the specified user.
     */
    public function logout(Request $request)
    {
        $request
            ->user()
            ->currentAccessToken()
            ->delete();

        return response()->json([
            'message' => 'Successfully logged out',
        ]);
    }
}
