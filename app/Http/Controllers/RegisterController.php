<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function signUp()
    {
        return view('auth.signup');
    }


    public function createAccount(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed',
        ]);

        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // Log the user in


        return redirect()->url('/dashboard')->with('success', 'Account created successfully!');
    }
    public function dashboard()
    {
        return view('dashboard.admin');
    }
}
