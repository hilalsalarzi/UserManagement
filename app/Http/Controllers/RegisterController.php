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


        return redirect()->route('dashboard')->with('success', 'Account created successfully!');
    }
    public function dashboard()
    {
        return view('dashboard.admin');
    }


    public function login()
    {
        return view('auth.login');
    }
    // loging
    public function loging(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);
// dd($request->all());
        // Attempt to log the user in
        if(auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
            return view('dashboard.admin');

        }


        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }
}
