<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $active = $request->query('active', 'dashboard_v1');
        return view('dashboard-lte.' .$active, ['active' => $active]);
    }

    public function lte(Request $request)
    {
        $active = $request->query('active', 'dashboard_v1');
        return view('dashboard-lte.' .$active, ['active' => $active]);
    }
}
