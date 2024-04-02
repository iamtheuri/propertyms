<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('landlord.invoices');
    }

    public function add()
    {
        return view('landlord.add_invoice');
    }
}
