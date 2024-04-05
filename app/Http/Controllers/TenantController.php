<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Property;
use App\Models\Unit;
use Illuminate\Validation\Rule;

class TenantController extends Controller
{
    public function index()
    {
        // Get the authenticated user
        $user = auth()->user();

        // Fetch all tenants belonging to the authenticated user
        $tenants = Tenant::whereHas('unit', function ($query) use ($user) {
            // Filter by property belonging to the authenticated user
            $query->whereHas('property', function ($query) use ($user) {
                $query->where('user_id', $user->id);
            });
        })->get();
        // Return the view with the tenants
        return view('landlord.tenants', [
            'tenants' => $tenants,
        ]);
    }
    public function add(Tenant $tenant)
    {
        $userId = auth()->user()->id;
        $properties = Property::where('user_id', $userId)->get();
        $propertyIds = $properties->pluck('id');
        $units = Unit::whereIn('property_id', $propertyIds)->get();
        // dd($units);
        return view('landlord.add_tenant', [
            'tenant' => $tenant,
            'properties' => $properties,
            'units' => $units,
        ]);
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('tenants', 'email')],
            'phone' => ['required', 'phone:KE', Rule::unique('tenants', 'phone')],
            'property_id' => 'required',
            'unit_id' => 'required',
        ], [
            'phone.phone' => 'The phone number must be a valid KE phone number.',
        ]);

        if ($request->hasFile('lease_agreement_file')) {
            $formFields['lease_agreement_file'] = $request->file('lease_agreement_file')->store('lease_agreement_files', 'public');
        }

        $userId = auth()->user()->id;

        $formFields['user_id'] = $userId;

        $tenant = Tenant::create($formFields);

        return redirect('/landlord/tenants')->with('message', 'Tenant created successfully');
    }

    public function edit(Tenant $tenant, Unit $unit)
    {
        $userId = auth()->user()->id;
        $properties = Property::where('user_id', $userId)->get();
        $propertyIds = $properties->pluck('id');
        $units = Unit::whereIn('property_id', $propertyIds)->get();
        return view('landlord.edit_tenant', [
            'tenant' => $tenant,
            'properties' => $properties,
            'units' => $units,
            'unit' => $unit,
        ]);
    }

    public function update(Request $request, Tenant $tenant)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('tenants', 'email')],
            'phone' => ['required', 'phone:KE', Rule::unique('tenants', 'phone')],
            'property_id' => 'required',
            'unit_id' => 'required',
        ]);

        if ($request->hasFile('lease_agreement_file')) {
            $formFields['lease_agreement_file'] = $request->file('lease_agreement_file')->store('lease_agreement_files', 'public');
        }

        $userId = auth()->user()->id;

        $formFields['user_id'] = $userId;

        $tenant->update($formFields);

        return redirect('/landlord/tenants')->with('message', 'Tenant updated successfully');
    }

    public function destroy(Tenant $tenant)
    {
        $tenant->delete();
        return redirect('/landlord/tenants')->with('message', 'Tenant deleted successfully');
    }
}
