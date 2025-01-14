<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        // Validate
        $fields = $request->validate([
            'name' => 'required|string|max:255',                 // Name is required, must be a string, and max length is 255
            'email' => 'required|email|unique:users,email',      // Email is required, must be unique in the users table
            'password' => 'required|string|min:3|confirmed',     // Password is required, min length 8, must match confirmation
        ]);



        // Register User
        $user = User::create($fields);
        // Login User
        Auth::login($user);
        // Redirect
        return redirect()->route('admin');
    }
    public function login(Request $request)
    {
        // Validate


        $fields = $request->validate([
            'email' => 'required|email',     // Ensure email is required and valid
            'password' => 'required|string', // Ensure password is required
        ]);

        // Attempt to Login
        if (Auth::attempt($fields)) {
            return redirect()->intended();
        } else {
            return back()->withErrors([
                'failed' => 'The provided credentials do not match our records'
            ]);
        }



        // Redirect
    }
}
