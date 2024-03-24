<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show Registration Form
    public function create()
    {
        return view('users.register');
    }

    // Store New User
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'phone' => ['required', 'min:10', 'regex:/^\d{10,}$/'],
            'role' => ['required', 'in:landlord,tenant'],
            'password' => ['required', 'confirmed', 'regex:/^(?=.*[A-Z])(?=.*\d).{6,}$/'],
        ]);

        // Encrypt Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create New User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/tenant/home')->with('message', 'User created and logged in');
    }

    // Logout
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Logged out!');
    }

    // Login
    public function login()
    {
        return view('users.login');
    }

    // Authenticate 
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/tenant/home')->with('message', 'Login Successful');
        }

        return back()->withErrors(['email' => 'Invalid Credentials!'])->onlyInput('email');
    }
}
