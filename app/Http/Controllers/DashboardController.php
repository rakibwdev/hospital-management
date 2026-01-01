<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $brandCount = \App\Models\Brand::count();
        $companyCount = \App\Models\Company::count();
        $genericCount = \App\Models\Generic::count();

        return view('dashboard', compact('brandCount', 'companyCount', 'genericCount'));
    }
}
