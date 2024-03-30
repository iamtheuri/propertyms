<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use Illuminate\Validation\Rule;

class UnitController extends Controller
{
    public function index()
    {
        return view('landlord/units');
    }
}
