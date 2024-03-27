<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\Validation\Rule;

class PropertyController extends Controller
{
    public function index()
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

        $property = Property::create($formFields);

        return redirect('/landlord/properties')->with('message', 'Property created successfully');
    }
}
