<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Ensure you have the User model created
use Illuminate\Support\Facades\Hash; // For password hashing

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Validate the input fields
        $request->validate([
            'username' => 'required|string|max:255|unique:users', // Username must be unique
            'password' => 'required|string|min:8', // Password must be at least 8 characters
        ]);

        // Create a new user in the database
        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password), // Hash the password before storing
        ]);

        // Redirect to the login page with a success message
        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }
}

