<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Property;
use App\Models\Unit;
use App\Models\Tenant;
use App\Models\Invoice;
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

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'phone' => 'required',
            'role' => ['required', 'in:landlord,tenant'],
            'password' => ['required', 'confirmed', 'regex:/^(?=.*[A-Z])(?=.*\d).{6,}$/'],
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        // Check if tenant email exists
        if ($formFields['role'] === 'tenant') {
            $tenantExists = Tenant::where('email', $formFields['email'])->first();
            if (!$tenantExists) {
                return redirect()->back()->withInput()->withErrors(['email' => 'User does not exist.']);
            }
        }

        // New User
        $user = User::create($formFields);

        // dd($user->role);

        if ($user->role === 'landlord') {
            $redirectTo = '/landlord/home';
        } else {
            $redirectTo = '/tenant/home';
        }

        auth()->login($user);

        return redirect($redirectTo)->with('message', 'User created and logged in');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Logged out!');
    }

    public function login()
    {
        return view('users.login');
    }

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
        $tenantEmail = auth()->user()->email;
        $authTenants = Tenant::where('email', $tenantEmail)->get();


        $tenantInfo = [];
        foreach ($authTenants as $authTenant) {
            $propertyName = $authTenant->unit->property->name;
            $unitName = $authTenant->unit->name;
            $leaseStart = $authTenant->tenant_move_in;
            $owner = $authTenant->unit->property->owner;
            $location = $authTenant->unit->property->location;
            $till = $authTenant->unit->property->till;
            $description = $authTenant->unit->property->description;

            $balance = $authTenant->invoices->where('status', 'pending')->sum('invoice_amount');

            $tenantInfo[] = [
                'property_name' => $propertyName,
                'unit_name' => $unitName,
                'lease_start' => $leaseStart,
                'owner' => $owner,
                'location' => $location,
                'till' => $till,
                'description' => $description,
                'balance' => $balance,
            ];
        }

        return view('tenant.home', [
            'tenantInfo' => $tenantInfo
        ]);
    }

    public function landlord_home()
    {
        $userId = auth()->user()->id;
        $propertyCount = Property::where('user_id', $userId)->latest()->count();
        $unitCount = Unit::where('user_id', $userId)->latest()->count();
        $tenantCount = Tenant::where('user_id', $userId)->latest()->count();

        $units = Unit::where('user_id', $userId)->with('property')->latest()->get();
        $vacantCount = $units->where('occupied', 'vacant')->count();
        $occupiedCount = $units->where('occupied', 'occupied')->count();

        $invoices = Invoice::where('user_id', $userId)
            ->where('status', 'pending')
            ->get();

        $totalPending = $invoices->sum('invoice_amount');

        $receivedPayments = Invoice::where('user_id', $userId)
            ->where('status', 'closed')
            ->get();
        $totalReceived = $receivedPayments->sum('invoice_amount');

        $currentMonth = strtolower(now()->format('F'));
        $selectedDate = request()->input('due_date');

        $currentMonthInvoice = $invoices->where('due_date', $selectedDate)
            ->where('status', 'pending')
            ->pluck('invoice_amount')
            ->sum();

        return view('landlord.home', [
            'units' => $units,
            'vacantCount' => $vacantCount,
            'occupiedCount' => $occupiedCount,
            'totalPending' => $totalPending,
            'totalReceived' => $totalReceived,
            'currentMonth' => $currentMonth,
            'propertyCount' => $propertyCount,
            'unitCount' => $unitCount,
            'tenantCount' => $unitCount,
            'currentMonthInvoice' => $currentMonthInvoice,
        ]);
    }
}
