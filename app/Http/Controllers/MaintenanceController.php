<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance;
use Illuminate\Validation\Rule;

class MaintenanceController extends Controller
{

    //Show All Maintenances
    public function index()
    {
        $maintenances = Maintenance::latest()->get();
        return view('tenant.maintenance', compact('maintenances'));
    }


    // Store New Maintenances
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'category' => ['required', 'in:plumbing,electricity,shower,painting,other'],
            'status' => ['required', 'in:open,closed'],
            'summary' => ['required', 'min:5']
        ]);

        $maintenance = Maintenance::create($formFields);

        //dd($maintenance->category);

        return redirect('/tenant/maintenance')->with('success', 'Maintenance Added Successfully!');
    }
}
