<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function home()
    {
        return view('home');
    }

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

        // dd($user->role);

        if ($user->role === 'landlord') {
            $redirectTo = '/landlord/home';
        } else {
            $redirectTo = '/tenant/home';
        }

        // Login
        auth()->login($user);

        return redirect($redirectTo)->with('message', 'User created and logged in');
    }

    // Logout
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Logged out!');
    }

    // Login Form
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

            $user = auth()->user();

            if ($user->role === 'landlord') {
                $redirectTo = '/landlord/home';
            } else {
                $redirectTo = '/tenant/home';
            }

            return redirect($redirectTo)->with('message', 'Login Successful');
        }

        return back()->withErrors(['email' => 'Invalid Credentials!'])->onlyInput('email');
    }

    public function tenant_home()
    {
        return view('tenant.home');
    }

    public function tenant_financials()
    {
        return view('tenant.financials');
    }

    public function landlord_home()
    {
        return view('landlord.home');
    }

    public function landlord_financials()
    {
        return view('landlord.financials');
    }
}
