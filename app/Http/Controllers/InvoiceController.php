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
        $userId = auth()->user()->id;
        $tenants = Tenant::where('user_id', $userId)->get();
        return view('landlord.invoices', [
            'invoices' => $invoices,
            'tenants' => $tenants,
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
            'due_date' => 'required',
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
            'due_date' => 'required',
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

    public function reminders(Request $request)
    {
        $key = config('infobip.api_key');
        $baseUrl = config('infobip.url_base_path');
        $selectedPhone = $request->input('tenant_phone');

        $selectedInvoice = Invoice::whereHas('tenant', function ($query) use ($selectedPhone) {
            $query->where('phone', $selectedPhone);
        })->first();

        $balance = $selectedInvoice->invoice_amount;

        $selectedTenant = Tenant::where('phone', $selectedPhone)->first();
        $selectedName = $selectedTenant->name;

        $selectedProperty = $selectedTenant->property;
        $propertyName = $selectedProperty->name;

        $message = "Dear $selectedName, $propertyName reminds you to pay your outstanding balance of Ksh. $balance.";

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://' . $baseUrl . '/sms/2/text/single',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode(array(
                'from' => 'PropertyMS',
                'to' => $selectedPhone,
                'text' => $message
            )),
            CURLOPT_HTTPHEADER => array(
                'Authorization: App ' . $key,
                'Content-Type: application/json',
                'Accept: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        if ($response) {
            return redirect('/landlord/invoices')->with('message', 'Reminder sent successfully');
        } else {
            return redirect('/landlord/invoices')->with('error', 'Failed to send reminder');
        }
    }
}
