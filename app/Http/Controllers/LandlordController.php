<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Landlord;

class LandlordController extends Controller
{
    public function index()
    {
        return view('landlord.home');
    }
    public function tenants()
    {
        return view('landlord.tenants');
    }
    public function properties()
    {
        return view('landlord.properties');
    }
    public function financials()
    {
        return view('landlord.financials');
    }
}
