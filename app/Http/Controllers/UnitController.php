<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;

use Illuminate\Validation\Rule;

class UnitController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;
        $units = Unit::where('user_id', $userId)->with('property')->latest()->get();

        return view('landlord.units', [
            'units' => $units,
        ]);
    }

    public function add(Property $property)
    {
        $userId = auth()->user()->id;

        $properties = Property::where('user_id', $userId)->get();

        return view('landlord/add_unit', [
            'properties' => $properties,
        ]);
    }

    public function store(Request $request)
    {

        $formFields = $request->validate([
            'name' => ['required'],
            'rent' => ['required'],
            'occupied' => ['required'],
            'property_id' => ['required'],
        ]);

        $userId = auth()->id();

        $formFields['user_id'] = $userId;
        $unit = Unit::create($formFields);

        return redirect('/landlord/units')->with('message', 'Unit created successfully');
    }

    public function edit(Unit $unit)
    {
        $userId = auth()->user()->id;
        $properties = Property::where('user_id', $userId)->get();
        $property = $unit->property;
        return view('landlord.edit_unit', [
            'unit' => $unit,
            'property' => $property,
            'properties' => $properties,
        ]);
    }

    public function update(Request $request, Unit $unit)
    {
        $formFields = $request->validate([
            'name' => ['required'],
            'rent' => ['required'],
            'occupied' => ['required'],
            'property_id' => ['required'],
        ]);

        $userId = auth()->id();

        $formFields['user_id'] = $userId;
        $unit->update($formFields);

        return redirect('/landlord/units')->with('message', 'Unit updated successfully');
    }

    public function destroy(Unit $unit)
    {
        $unit->delete();
        return redirect('/landlord/units')->with('message', 'Unit deleted successfully');
    }
}
