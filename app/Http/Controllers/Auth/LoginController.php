<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Check if the username exists
        $user = User::where('name', $request->username)->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials. Please try again.'
            ]);
        }

        // Check if password matches
        if (Hash::check($request->password, $user->password)) {
            Auth::login($user);

            return response()->json([
                'success' => true,
                'redirect_url' => route('dashboard.page')
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid credentials. Please try again.'
        ]);
    }
}
