<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

use App\Models\Property;
use App\Models\Unit;
use App\Models\Tenant;

class InvoiceController extends Controller
{
    public function index()
    {
        $user = auth()->user()->id;
        $invoices = Invoice::where('user_id', $user)->get();
        return view('landlord.invoices', [
            'invoices' => $invoices,
        ]);
    }

    public function add(Invoice $invoice)
    {
        $userId = auth()->user()->id;
        $properties = Property::where('user_id', $userId)->get();
        $propertyIds = $properties->pluck('id');
        $units = Unit::whereIn('property_id', $propertyIds)->get();
        $tenants = Tenant::where('user_id', $userId)->get();
        return view('landlord.add_invoice', [
            'tenants' => $tenants,
            'properties' => $properties,
            'units' => $units,
            'invoice' => $invoice,
        ]);
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'property_id' => 'required',
            'unit_id' => 'required',
            'tenant_id' => 'required',
            'invoice_amount' => 'required',
            'month' => ['nullable', 'in:january,february,march,april,may,june,july,august,september,october,november,december'],
            'status' => ['required', 'in:pending,closed'],
        ]);
        $userId = auth()->user()->id;

        $formFields['user_id'] = $userId;

        $invoice = Invoice::create($formFields);

        return redirect('/landlord/invoices')->with('message', 'Invoice created successfully');
    }
    public function edit(Invoice $invoice)
    {
        $userId = auth()->user()->id;
        $properties = Property::where('user_id', $userId)->get();
        $propertyIds = $properties->pluck('id');
        $units = Unit::whereIn('property_id', $propertyIds)->get();
        $tenants = Tenant::where('user_id', $userId)->get();
        // dd($invoice->tenant->unit->property->name);
        return view('landlord.edit_invoice', [
            'tenants' => $tenants,
            'properties' => $properties,
            'units' => $units,
            'invoice' => $invoice,
        ]);
    }

    public function update(Request $request, Invoice $invoice)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'property_id' => 'required',
            'unit_id' => 'required',
            'tenant_id' => 'required',
            'invoice_amount' => 'required',
            'month' => ['nullable', 'in:january,february,march,april,may,june,july,august,september,october,november,december'],
            'status' => ['required', 'in:pending,closed'],
        ]);
        $userId = auth()->user()->id;

        $formFields['user_id'] = $userId;

        $invoice->update($formFields);

        return redirect('/landlord/invoices')->with('message', 'Invoice updated successfully');
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return redirect('/landlord/invoices')->with('message', 'Invoice deleted successfully');
    }
}
