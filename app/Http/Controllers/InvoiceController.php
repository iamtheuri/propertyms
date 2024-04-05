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

    public function reminders(Request $request, Invoice $invoice)
    {
        $key = config('infobip.api_key');
        $baseUrl = config('infobip.url_base_path');
        $apiKeyPrefix = config('infobip.api_key_prefix');
        $selectedPhone = $request->input('tenant_phone');
        // dd($invoice);
        $propertyName = $invoice->tenant->unit->property->name;
        $tenantName = $invoice->tenant->name;
        $invoiceAmount = $invoice->invoice_amount;
        dd($propertyName, $tenantName, $invoiceAmount);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://1vqp6k.api.infobip.com/sms/2/text/single',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{"from":"PropertyMS",
                "to":"' . $selectedPhone . '",
                "text":"{{ $propertyName }}
                Dear {{ $tenantName }}, this is a polite reminder to pay your outstanding {{ $invoiceAmount }}"
            }',
            CURLOPT_HTTPHEADER => array(
                'Authorization: App ' . $key,
                'Content-Type: application/json',
                'Accept: application/json'
            ),
        ));


        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

        return redirect('/landlord/invoices')->with('message', 'Reminder sent successfully');
    }
}
