<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\Validation\Rule;

class PropertyController extends Controller
{
    public function index()
    {
        $userId = auth()->id();
        $name = request('search');

        $propertiesQuery = Property::where('user_id', $userId)->latest();
        if ($name) {
            $propertiesQuery->where('name', 'like', "%$name%")
                ->orWhere('description', 'like', "%$name%")
                ->orWhere('location', 'like', "%$name%")
                ->orWhere('owner', 'like', "%$name%");
        }

        $properties = $propertiesQuery->get();

        if ($properties->isEmpty()) {
            return redirect('/landlord/properties')->with('message', 'Not found');
        }

        return view('landlord.properties', compact('properties'));
    }

    public function add()
    {
        return view('landlord.add_property');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', Rule::unique('properties', 'name')],
            'owner' => ['required'],
            'units' => ['required'],
            'description' => ['required'],
            'location' => ['required'],
            'till' => ['required'],
        ]);

        $userId = auth()->id();

        $formFields['user_id'] = $userId;

        // dd($formFields);

        $property = Property::create($formFields);

        return redirect('/landlord/properties')->with('message', 'Property created successfully');
    }

    public function edit(Property $property)
    {
        return view('landlord/edit_property', [
            'property' => $property,
        ]);
    }

    public function update(Request $request, Property $property)
    {
        $formFields = $request->validate([
            'name' => ['required'],
            'owner' => ['required'],
            'units' => ['required'],
            'description' => ['required'],
            'location' => ['required'],
            'till' => ['required'],
        ]);

        $userId = auth()->id();

        $formFields['user_id'] = $userId;

        $property->update($formFields);

        return redirect('/landlord/properties')->with('message', 'Property updated successfully');
    }

    public function destroy(Property $property)
    {
        // dd($property);
        $property->delete();
        return redirect('/landlord/properties')->with('message', 'Property deleted successfully');
    }
}
