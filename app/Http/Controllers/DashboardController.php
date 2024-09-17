<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }



    public function residents()
    {
        return view('dashboard.residents');
    }

    public function caregivers()
    {
        return view('dashboard.caregivers');
    }

    public function volunteers()
    {
        return view('dashboard.volunteers');
    }

    public function donations()
    {
        return view('dashboard.donations');
    }

    public function activities()
    {
        return view('dashboard.activities');
    }

    public function reports()
    {
        return view('dashboard.reports');
    }

    public function default()
    {
        return view('dashboard.default'); // Ou qualquer página padrão
    }
}
