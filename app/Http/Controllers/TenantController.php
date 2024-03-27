<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;

class TenantController extends Controller
{
    public function index()
    {
        return view('tenant.home');
    }

    public function financials()
    {
        return view('tenant.financials');
    }
}
