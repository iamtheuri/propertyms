<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance;
use Illuminate\Validation\Rule;

class MaintenanceController extends Controller
{

    public function index()
    {
        $userId = auth()->user()->id;
        $maintenances = Maintenance::where('user_id', $userId)->latest()->get();
        return view('tenant.maintenance', compact('maintenances'));
    }

    public function add()
    {
        return view('tenant.add-maintenance');
    }


    public function store(Request $request)
    {
        $formFields = $request->validate([
            'category' => ['required', 'in:plumbing,electricity,shower,painting,other'],
            'status' => ['required', 'in:open,closed'],
            'summary' => ['required', 'min:5']
        ]);

        $userId = auth()->id();

        $formFields['user_id'] = $userId;

        $maintenance = Maintenance::create($formFields);

        //dd($maintenance->category);

        return redirect('/tenant/maintenance')->with('success', 'Maintenance Added Successfully!');
    }

    public function edit(Maintenance $maintenance)
    {
        return view('tenant.edit-maintenance', [
            'maintenance' => $maintenance
        ]);
    }

    public function update(Request $request, Maintenance $maintenance)
    {
        $formFields = $request->validate([
            'category' => ['required', 'in:plumbing,electricity,shower,painting,other'],
            'status' => ['required', 'in:open,closed'],
            'summary' => ['required', 'min:5']
        ]);

        $userId = auth()->id();

        $formFields['user_id'] = $userId;

        $maintenance->update($formFields);

        return redirect('/tenant/maintenance')->with('success', 'Maintenance Updated successfully!');
    }

    public function destroy(Maintenance $maintenance)
    {
        $maintenance->delete();
        return redirect('/tenant/maintenance')->with('success', 'Maintenance deleted successfully!');
    }
}
