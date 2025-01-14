<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        dd($fields);

        // Register User

        // Login User

        // Redirect
    }
}
